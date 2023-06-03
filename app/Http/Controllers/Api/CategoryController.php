<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get back the category items
        $category = Category::all();
        return CategoryResource::collection($category);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Add a new Category Item
        $category = Category::create([
            "name"=>$request->name,
        ]);
     return new CategoryResource($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //Get a category item with id
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //Update a particular item
        $category->update([
            "name"=> $request->name,
        ]);
      return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //Delete
        $category->delete();

        return response()->json([
            "Record has been deleted",
        ]);
    }
}
