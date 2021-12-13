<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\DishResource;
use App\Models\Dish;
use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DishController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_en'       => 'required|max:255',
            'user_id'       => 'required|max:255',
            'currency'       => 'required|max:255',
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
            'currency'=>$request->currency,
            'photo'=>$photo,
            'ingredients_en'=>$request->ingredients_en,
            'ingredients_fr'=>$request->ingredients_en,
            'ingredients_ar'=>$request->ingredients_en,
            'rate'=>'0',
            'user_id'=>$request->user_id,
            'category_id'=>$request->category,
        ]);

    }
    public function update(Request $request,$id)
    {

        $this->validate($request,[
            'name_en'       => 'required|max:255',
            'photo'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'name_ar'       => 'required|max:255',
            // 'name_fr'       => 'required|max:255',
            'description_en'=> 'required|max:255',
            // 'description_fr'=> 'required|max:255',
            // 'description_ar'=> 'required|max:255',
            'price'          => 'required|max:255',
            // 'solde'         => 'required|max:255',
            'currency'         => 'required|max:255',
            'ingredients_en'=> 'required|max:255',
            // 'ingredients_fr'=> 'required|max:255',
            // 'ingredients_ar'=> 'required|max:255',
            'category'   => 'required|max:255',
        ]);
        $dish =Dish::find($id);
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
            'name_ar'=>$request->name_en,
            'name_fr'=>$request->name_en,
            'description_en'=>$request->description_en,
            'description_fr'=>$request->description_en,
            'description_ar'=>$request->description_en,
            'prix'=>$request->price,
            'solde'=>$request->price,
            'statu'=>'0',
            'currency'=>$request->currency,
            'ingredients_en'=>$request->ingredients_en,
            'ingredients_fr'=>$request->ingredients_en,
            'ingredients_ar'=>$request->ingredients_en,
            'rate'=>'0',
            // 'user_id'=>$request->user_id,
            'category_id'=>$request->category,
        ]);
        if($request->hasFile('photo')){
            $dish->photo=$photo;
            $dish->save();
        }
        return $dish;
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
    public function delete($id)
    {
        $dish = Dish::find($id);
        if (File::exists($dish->photo)) {
            unlink($dish->photo);
        }
        return  $dish->delete();
    }
    public function delete_gallery($id)
    {
        $dish = Media::find($id);
        if (File::exists($dish->photo)) {
            unlink($dish->photo);
        }
        return  $dish->delete();
    }
    public function dish($id)
    {
        return Dish::find($id);
    }
    public function add_photo(Request $request)
    {
        $this->validate($request,[
            'photo'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'dish_id'       => 'required|max:255',
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
            'dish_id'=>$request->dish_id,
        ]);
        return Dish::find($request->dish_id)->media;
    }
    public function dish_photos($id)
    {

     return Media::where("dish_id",$id)->get();
    }
    public function oneresto($id)
    {
        return User::find($id);
    }
}
