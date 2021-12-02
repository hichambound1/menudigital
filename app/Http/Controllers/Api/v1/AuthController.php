<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class AuthController extends Controller
{

    public function register(Request $request) {
        $fields = $request->validate([
            'name_en' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);


        $role= Role::where('name','user')->first();
        if($role== NULL){
            $role= Role::create([
                'name'=>'user'
            ]);
        }
        $user= User::create([
            'name_en' =>$request->name_en,
            'email' => $request->email,
            'statu' => 0,
            'role_id'  => $role->id,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);



        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'email or password invalide'
            ], 401);
        }

        $token = $user->createToken($user->email)->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
    public function update(Request $request)    
    {
        $this->validate($request,[
            'name_en'=>'required|max:255',
            'logo'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description_en'=> 'required|max:255',
            'email'=> 'required|max:255',
            'phone'=> 'required|max:255',
            'address_en'=> 'required|max:255',
            'user_id'=> 'required|max:255',
           
        ]);
        
        $user =User::find($request->user_id);
    
        if($request->hasFile('logo')){
            $number = mt_rand(1, 999999);
            $image = $request->file('logo');
            $destinationPath = 'user_logos';
            $image->move($destinationPath, $number . $image->getClientOriginalName());
            $logo =$destinationPath . "/" . $number . $image->getClientOriginalName();
            if (File::exists($user->logo)) {
                unlink($user->logo);
            }
        }
        if($request->hasFile('cover')){
            $number = mt_rand(1, 999999);
            $image = $request->file('cover');
            $destinationPath = 'users_cover';
            $image->move($destinationPath, $number . $image->getClientOriginalName());
            $cover =$destinationPath . "/" . $number . $image->getClientOriginalName();
            if (File::exists($user->cover)) {
                unlink($user->cover);
            }
        }
        $user->update([
            'name_en'=>$request->name_en,
            'address_en'=>$request->address_en,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'description_en'=>$request->description_en,
        ]);
        if($request->hasFile('logo')){
            $user->logo=$logo;
            $user->save();
        }
        if($request->hasFile('cover')){
            $user->cover=$cover;
            $user->save();
        }
        return $user;
    }
}
