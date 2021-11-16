<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\DishResource;
use App\Models\Dish;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_en'       => 'required|max:255',
            'photo'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'name_ar'       => 'required|max:255',
            // 'name_fr'       => 'required|max:255',
            'description_en'=> 'required|max:255',
            // 'description_fr'=> 'required|max:255',
            // 'description_ar'=> 'required|max:255',
            'price'          => 'required|max:255',
            // 'solde'         => 'required|max:255',
            'ingredients_en'=> 'required|max:255',
            // 'ingredients_fr'=> 'required|max:255',
            // 'ingredients_ar'=> 'required|max:255',
            'category'   => 'required|max:255',
        ]);
        if($request->hasFile('photo')){
            $number = mt_rand(1, 999999);
            $image = $request->file('photo');
            $destinationPath = 'dishes_photo';
            $image->move($destinationPath, $number . $image->getClientOriginalName());
            $photo =$destinationPath . "/" . $number . $image->getClientOriginalName();
        }
       return Dish::create([
            'name_en'=>$request->name_en,
            'name_ar'=>$request->name_en,
            'name_fr'=>$request->name_en,
            'description_en'=>$request->description_en,
            'description_fr'=>$request->description_en,
            'description_ar'=>$request->description_en,
            'prix'=>$request->price,
            'solde'=>$request->price,
            'statu'=>'0',
            'photo'=>$photo,
            'ingredients_en'=>$request->ingredients_en,
            'ingredients_fr'=>$request->ingredients_en,
            'ingredients_ar'=>$request->ingredients_en,
            'rate'=>'0',
            'user_id'=>Auth::user()->id,
            'category_id'=>$request->category,
        ]);

    }
    public function mydishes($id)
    {
        $dishes = User::find($id)->dishes;
        return  DishResource::collection($dishes);
    }
    public function alldishes()
    {
        $dishes = Dish::with('category')->get();
        return  DishResource::collection($dishes);
    }
}
