<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Display all of the items
        $roles=Role::all();
        return view('roles', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('role.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store it in storage
        $roles = Role::create([
            "name"=>$request->name,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //Get the element by id
        return view('role.show', compact('role'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //Edit the specified resource
        return view('role.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $role->update([
            "name" => $request->name,
        ]);
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
        $role->delete();
        return redirect()->back();
    }
}
