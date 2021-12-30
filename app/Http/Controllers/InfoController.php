<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::all();
        return view('dashboard.infos.index',['infos'=>$infos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.infos.add');
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
            'phone'        => 'required|max:255',
            'description'  => 'required|max:255',
            'address'      => 'required|max:255',
            'facebook'     => 'required|max:255',
            'insta'        => 'required|max:255',
            'linkdin'      => 'required|max:255',
            'email'        => 'required|string|email|max:255',

        ]);
        Info::create([
            'phone'        =>$request->phone,
            'description'  =>$request->description,
            'address'      =>$request->address,
            'facebook'     =>$request->facebook,
            'insta'        =>$request->insta,
            'linkdin'      =>$request->linkdin,
            'email'        =>$request->email,
        ]);
        return redirect('infos')->with('added','info added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {

        return view('dashboard.infos.edit',['info'=>$info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        $this->validate($request,[
            'phone'        => 'required|max:255',
            'description'  => 'required|max:255',
            'address'      => 'required|max:255',
            'facebook'     => 'required|max:255',
            'insta'        => 'required|max:255',
            'linkdin'      => 'required|max:255',
            'email'        => 'required|string|email|max:255',

        ]);
        $info->update([
            'phone'        =>$request->phone,
            'description'  =>$request->description,
            'address'      =>$request->address,
            'facebook'     =>$request->facebook,
            'insta'        =>$request->insta,
            'linkdin'      =>$request->linkdin,
            'email'        =>$request->email,
        ]);
        return redirect('infos')->with('updated','info updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        //
    }
}
