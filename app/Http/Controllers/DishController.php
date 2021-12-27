<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes= Dish::with('category')->get();
        return view('dashboard.dishes.index',['dishes'=>$dishes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        return view('dashboard.dishes.add',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_en'       => 'required|max:255',
            'photo'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_ar'       => 'required|max:255',
            'name_fr'       => 'required|max:255',
            'description_en'=> 'required|max:255',
            'description_fr'=> 'required|max:255',
            'description_ar'=> 'required|max:255',
            'price'          => 'required|max:255',
            'solde'         => 'required|max:255',
            'ingredients_en'=> 'required|max:255',
            'ingredients_fr'=> 'required|max:255',
            'ingredients_ar'=> 'required|max:255',
            'category'   => 'required|max:255',
        ]);
        if($request->hasFile('photo')){
            $number = mt_rand(1, 999999);
            $image = $request->file('photo');
            $destinationPath = 'dishes_photo';
            $image->move($destinationPath, $number . $image->getClientOriginalName());
            $photo =$destinationPath . "/" . $number . $image->getClientOriginalName();
        }
        Dish::create([
            'name_en'=>$request->name_en,
            'name_ar'=>$request->name_ar,
            'name_fr'=>$request->name_fr,
            'description_en'=>$request->description_en,
            'description_fr'=>$request->description_fr,
            'description_ar'=>$request->description_ar,
            'prix'=>$request->price,
            'solde'=>$request->solde,
            'statu'=>'0',
            'currency'=>'$',
            'photo'=>$photo,
            'ingredients_en'=>$request->ingredients_en,
            'ingredients_fr'=>$request->ingredients_fr,
            'ingredients_ar'=>$request->ingredients_ar,
            'rate'=>'0',
            'user_id'=>Auth::user()->id,
            'category_id'=>$request->category,
        ]);
        return redirect()->route('dish.index')->with('added','dish added seccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        return view('dashboard.dishes.details',['dish'=>$dish]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $categories= Category::all();
        return view('dashboard.dishes.edit',['dish'=>$dish,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $this->validate($request,[
            'name_en'       => 'required|max:255',
            'photo'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_ar'       => 'required|max:255',
            'name_fr'       => 'required|max:255',
            'description_en'=> 'required|max:255',
            'description_fr'=> 'required|max:255',
            'description_ar'=> 'required|max:255',
            'price'          => 'required|max:255',
            'solde'         => 'required|max:255',
            'currency'         => 'required|max:255',
            'ingredients_en'=> 'required|max:255',
            'ingredients_fr'=> 'required|max:255',
            'ingredients_ar'=> 'required|max:255',
            'category'   => 'required|max:255',
        ]);
        if($request->hasFile('photo')){
            $number = mt_rand(1, 999999);
            $image = $request->file('photo');
            $destinationPath = 'dishes_photo';
            $image->move($destinationPath, $number . $image->getClientOriginalName());
            $photo =$destinationPath . "/" . $number . $image->getClientOriginalName();
            if (File::exists($dish->photo)) {
                unlink($dish->photo);
            }
        }
        $dish->update([
            'name_en'=>$request->name_en,
            'name_ar'=>$request->name_ar,
            'name_fr'=>$request->name_fr,
            'description_en'=>$request->description_en,
            'description_fr'=>$request->description_fr,
            'description_ar'=>$request->description_ar,
            'prix'=>$request->price,
            'solde'=>$request->solde,
            'statu'=>'0',
            'currency'=>$request->currency,
            'ingredients_en'=>$request->ingredients_en,
            'ingredients_fr'=>$request->ingredients_fr,
            'ingredients_ar'=>$request->ingredients_ar,
            'rate'=>'0',
            'user_id'=>Auth::user()->id,
            'category_id'=>$request->category,
        ]);
        if($request->hasFile('photo')){
            $dish->photo=$photo;
            $dish->save();
        }
        return redirect()->route('dish.index')->with('updated','dish updated seccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        if (File::exists($dish->photo)) {
            unlink($dish->photo);
        }
        $dish->delete();
        return redirect()->back()->with('deleted','categories deleted');
    }
    public function add_photo(Request $request)
    {
        $this->validate($request,[
            'photo'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('photo')){
            $number = mt_rand(1, 999999);
            $image = $request->file('photo');
            $destinationPath = 'dishes_photo';
            $image->move($destinationPath, $number . $image->getClientOriginalName());
            $photo =$destinationPath . "/" . $number . $image->getClientOriginalName();
        }
        Media::create([
            'photo' => $photo,
            'dish_id'=>$request->dish,
        ]);
        return back()->with('added','photo added');
    }
}
