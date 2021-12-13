<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


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


    public function sendemailforgetpassword(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|exists:users',
        ]);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => Str::random(60),  //change 60 to any length you want
            'created_at' => Carbon::now()
        ]);
        $tokenData = DB::table('password_resets')
        ->where('email', $request->email)->first();

        $details = [
            'title' => 'Forget Password',
            'body' => 'This is for reset your password',
            'token' => $tokenData->token
        ];

        Mail::to($request->email)->send(new \App\Mail\ForgetPassword($details));

        return 'A fresh verification link has been sent to your email address';
    }
    public function resetpass($token)
    {
        $tokenData = DB::table('password_resets')
        ->where('token', $token)->first();

        if ( !$tokenData ) return redirect()->back();

        return redirect('http://localhost:3000/resetpassword/'.$tokenData->token);
    }
    public function updatepass(Request $request)
    {
        $this->validate($request,[
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $tokenData = DB::table('password_resets')
        ->where('token', $request->token)->first();

        if($tokenData){
                $user= User::where('email',$tokenData->email)->first();
                $user->update([
                    'password'=>bcrypt($request->password),
                ]);
                DB::table('password_resets')->where('email', $user->email)->delete();
            return true;

        }else{
            return false;
        }

    }
}
