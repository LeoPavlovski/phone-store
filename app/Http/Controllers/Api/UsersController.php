<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all the items
        $users = User::with('role')->get();

        return UserResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Post the item
        $users =User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "role_id"=>$request->role_id,
        ]);
        return new UserResource($users);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
       //Get the user item id.
       return new UserResource($user);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $user->update([
            "name"=>$request->name,
            "email"=>$request->email,
            "role_id"=>$request->role_id,
            "password"=>Hash::make($request->password),
        ]);
        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //Delete the item
        $user->delete();
        return response() ->json([
            "Record Deleted",
        ]);
    }
}
