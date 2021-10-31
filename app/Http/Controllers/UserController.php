<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        return view('dashboard.users.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.add');
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
            'name_en'        => 'required|max:255',
            'name_fr'        => 'required|max:255',
            'name_ar'        => 'required|max:255',
            'description_ar' => 'required|max:255',
            'description_fr' => 'required|max:255',
            'description_en' => 'required|max:255',
            'address_en'     => 'required|max:255',
            'address_fr'     => 'required|max:255',
            'address_ar'     => 'required|max:255',
            'phone'          => 'required|max:255',
            'password'       => 'required|max:255|confirmed',
            'email'          => 'required|string|email|max:255|unique:users',
            'logo'           => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('logo')){
            $number = mt_rand(1, 999999);
            $image = $request->file('logo');
            $destinationPath = 'user_logos';
            $image->move($destinationPath, $number . $image->getClientOriginalName());
            $photo =$destinationPath . "/" . $number . $image->getClientOriginalName();
        }
        User::create([
            'name_en'=>$request->name_en,
            'name_fr'=>$request->name_fr,
            'name_ar'=>$request->name_ar,
            'description_ar'=>$request->description_ar,
            'description_en'=>$request->description_en,
            'description_fr'=>$request->description_fr,
            'address_fr'=>$request->address_fr,
            'address_en'=>$request->address_en,
            'address_ar'=>$request->address_ar,
            'phone'=>$request->phone,
            'password'=> bcrypt($request->password),
            'email'=>$request->email,
            'logo'=>$photo,
            'statu'  => '0',
        ]);
        return redirect()->route('user.index')->with('added','user added seccessfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.users.details',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name_en' => 'required|max:255',
            'name_fr' => 'required|max:255',
            'name_ar' => 'required|max:255',
            'description_ar' => 'required|max:255',
            'description_fr' => 'required|max:255',
            'description_en' => 'required|max:255',
            'address_en'     => 'required|max:255',
            'address_fr'     => 'required|max:255',
            'address_ar'     => 'required|max:255',
            'phone'          => 'required|max:255',
            'email'          => 'string|email|max:255',
            'logo'           => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('logo')){
            $number = mt_rand(1, 999999);
            $image = $request->file('logo');
            $destinationPath = 'user_logo';
            $image->move($destinationPath, $number . $image->getClientOriginalName());
            $photo =$destinationPath . "/" . $number . $image->getClientOriginalName();
            if (File::exists($user->logo)) {
                unlink($user->logo);
            }
        }
        $user->update([
            'name_en'=>$request->name_en,
            'name_fr'=>$request->name_fr,
            'name_ar'=>$request->name_ar,

        ]);
        if($request->hasFile('logo')){
            $user->logo=$photo;
            $user->save();
        }
        return redirect()->route('user.index')->with('updated','user updated seccessfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (File::exists($user->logo)) {
            unlink($user->logo);
        }
        $user->delete();
        return redirect()->back()->with('deleted','user deleted');
    }
}
