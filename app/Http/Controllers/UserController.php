<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Display all of the items
        $users = User::all();
        return view('users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Showing the form
        return view('user.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Store the resource
        $users = User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "role_id"=>$request->role_id,
            "password"=>$request->password
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //Display the resource
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //getting the form
      return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //Here we update
        $user->update([
            "name"=>$request->name,
            "role_id"=>$request->role_id,
            "email"=>$request->email,
            "password"=>$request->password
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //Destroy the element
        $user->delete();
        return redirect()->back();
    }
}
