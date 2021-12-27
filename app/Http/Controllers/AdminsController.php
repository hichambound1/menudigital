<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index()
    {
        $role= Role::where('name','admin')->first();

        if($role== NULL){
            $role=Role::create([
                'name'=>'admin'
            ]);
        }
        $users= User::where('role_id',$role->id)->get();
        return view('dashboard.admin.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.add');
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
            'password'       => 'required|max:255|confirmed',
            'email'          => 'required|string|email|max:255|unique:users',

        ]);
              $role = Role::where('name','admin')->first();
        if($role== NULL){
            $role=Role::create([
                'name'=>'admin'
            ]);
        }
        User::create([
            'name_en'=>$request->name_en,
            'password'=> bcrypt($request->password),
            'email'=>$request->email,
            'statu'  => '1',
            'role_id'  => $role->id
        ]);
        return redirect()->route('admins.index')->with('added','admin added seccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // return view('dashboard.admin.details',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::find($id);
        return view('dashboard.admin.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request,[
            'name_en' => 'required|max:255',
            // 'name_fr' => 'required|max:255',
            // 'name_ar' => 'required|max:255',
            // 'description_ar' => 'required|max:255',
            // 'description_fr' => 'required|max:255',
            // 'description_en' => 'required|max:255',
            // 'address_en'     => 'required|max:255',
            // 'address_fr'     => 'required|max:255',
            // 'address_ar'     => 'required|max:255',
            // 'phone'          => 'required|max:255',
            'email'          => 'string|email|max:255',
            // 'logo'           => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // if($request->hasFile('logo')){
        //     $number = mt_rand(1, 999999);
        //     $image = $request->file('logo');
        //     $destinationPath = 'user_logo';
        //     $image->move($destinationPath, $number . $image->getClientOriginalName());
        //     $photo =$destinationPath . "/" . $number . $image->getClientOriginalName();
        //     if (File::exists($user->logo)) {
        //         unlink($user->logo);
        //     }
        // }
        $user->update([
            'name_en'=>$request->name_en,
            'name_fr'=>$request->name_fr,
            'name_ar'=>$request->name_ar,

        ]);
        // if($request->hasFile('logo')){
        //     $user->logo=$photo;
        //     $user->save();
        // }
        return redirect()->route('admins.index')->with('updated','admin updated seccessfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect()->back()->with('deleted','admin deleted');
    }
}
