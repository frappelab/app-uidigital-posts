<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return $categories;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $categories = new Category();
        $categories->title = $request->input('title');
        $categories->description = $request->input('description');
       
        $categories->save();

        return $categories;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);

        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $category = Category::find($id);
        $category->title = $request->input('title');
        $category->description = $request->input('description');
    
        $category->save();

        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);

        if (is_null($category)) {
            return response()->json('No se pudo eliminar categoria!');
        }

        $category->delete();

        return response()->json('Categoria eliminado!');
    }
}
