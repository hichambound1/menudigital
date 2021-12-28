<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories= Category::all();
        return view('dashboard.categories.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.add');
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
            'name_en' => 'required|max:255',
            'name_fr' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'photo'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('photo')){
            $number = mt_rand(1, 999999);
            $image = $request->file('photo');
            $destinationPath = 'category_photo';
            $image->move($destinationPath, $number . $image->getClientOriginalName());
            $photo =$destinationPath . "/" . $number . $image->getClientOriginalName();

        }
        Category::create([
            'name_en'=>$request->name_en,
            'name_fr'=>$request->name_fr,
            'name_ar'=>$request->name_ar,
            'photo'  =>$photo,
            'statu'  => '0',
        ]);
        return redirect()->route('category.index')->with('added','category added seccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('dashboard.categories.details',['category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name_en' => 'required|max:255',
            'name_fr' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'photo'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('photo')){
            $number = mt_rand(1, 999999);
            $image = $request->file('photo');
            $destinationPath = 'category_photo';
            $image->move($destinationPath, $number . $image->getClientOriginalName());
            $photo =$destinationPath . "/" . $number . $image->getClientOriginalName();
            if (File::exists($category->photo)) {
                unlink($category->photo);
            }
        }
        $category->update([
            'name_en'=>$request->name_en,
            'name_fr'=>$request->name_fr,
            'name_ar'=>$request->name_ar,

        ]);
        if($request->hasFile('photo')){
            $category->photo=$photo;
            $category->save();
        }
        return redirect()->route('category.index')->with('updated','category updated seccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if (File::exists($category->photo)) {
            unlink($category->photo);
        }
        $category->delete();
        return redirect()->back()->with('deleted','categories deleted');
    }
    public function categorystatu(Request $request, $id)
    {

        $etat=0;
        if($request->etat=='on'){
            $etat=1;
        }

        Category::where('id',$id)->update([
            'statu'=>$etat,

        ]);
        return redirect()->back()->with('added','etat changed');
    }
}
