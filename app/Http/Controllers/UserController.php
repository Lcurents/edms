<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard');
    }


    public function user()
    {
        $max_data=5;
        $data = User::orderBy('name','desc')->paginate($max_data);

        return view('user',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data=[
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'password'=>Hash::make($request->input("password")),
        ];

        User::create($data);
        return redirect()->route('user')->with('success','Kamu berhasil simpan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=[
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
        ];

        User::where('id',$id)->update($data);
        return redirect()->route('user')->with('success','Kamu berhasil Update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         User::where('id',$id)->delete();
        return redirect()->route('user')->with('success','Kamu berhasil hapus data');
    }
}
