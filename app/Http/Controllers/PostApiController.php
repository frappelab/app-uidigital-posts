<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return $posts;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'state' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->category_id = $request->input('category_id');
        $post->state = $request->input('state');

        $post->save();

        return $post;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'state' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->category_id = $request->input('category_id');
        $post->state = $request->input('state');

        $post->save();

        return $post;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        if (is_null($post)) {
            return response()->json('No se pudo eliminar!');
        }

        $post->delete();

        return response()->json('Post eliminado!');
    }
}
