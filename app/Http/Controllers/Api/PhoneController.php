<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PhoneResource;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //We want to list all of the elements here.
        $phones =Phone::with('Category')->get();
        // return view('phones', compact('phones'));
        return PhoneResource::collection($phones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // we want to publish a element
        $phones = Phone::create([
            "title"=>$request->title,
            "price"=>$request->price,
            "image"=>$request->image,
            "category_id"=>$request->category_id,
            "description"=>$request->description,
        ]);
        return new PhoneResource($phones);
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {
        //Show only one phone
        return new PhoneResource($phone);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phone $phone)
    {
       
        //Update the phone, directly
        $phone->update([
            // display the elements that we want to update.
            "title"=>$request->title,
            "price"=>$request->price,
            "image"=>$request->image,
            "description"=>$request->description,
            "category_id"=>$request->category_id,
        ]);   
        return new PhoneResource($phone);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        // Delete the element
        $phone->delete();
        return response()->json([
            "Record Deleted",
        ]);
    }
}
