<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Get back all of the items
        $phones=Phone::all();
        return view('phones',compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Showing the form * get request
        return view('phone.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //We want to store it with the POST.
        $phones = Phone::create([
            "category_id"=>$request->category_id,
            "title"=>$request->title,
            "price"=>$request->price,
            "description"=>$request->description,
            "image"=>$request->image
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {
        //Display the specified resource
        return view ('phone.show',compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phone $phone)
    {
        // Edit the item
        return view('phone.edit', compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phone $phone)
    {
        //update the values
        $phone->update([
            "title"=>$request->title,
            "price"=>$request->price,
            "description"=>$request->description,
            "image"=>$request->image,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        //Delete the element from the storage
        $phone->delete();
        return redirect()->back();
    }
}
