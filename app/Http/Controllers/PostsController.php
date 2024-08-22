<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Display a listing of the posts (GET /api/posts)
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    // Store a newly created post in storage (POST /api/posts)
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|string|min:1',
            'user_id' => 'required|exists:users,id',
        ]);

        $post = Post::create($validatedData);

        return response()->json([
            'message' => 'Post created successfully.',
            'post' => $post
        ], 201);
    }

    // Display the specified post (GET /api/posts/{id})
    public function show(Post $post)
    {
        return response()->json($post);
    }

    // Update the specified post in storage (PUT/PATCH /api/posts/{id})
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'content' => 'required|string|min:1',
            'user_id' => 'required|exists:users,id',
        ]);

        $post->update($validatedData);

        return response()->json([
            'message' => 'Post updated successfully.',
            'post' => $post
        ]);
    }

    // Remove the specified post from storage (DELETE /api/posts/{id})
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json([
            'message' => 'Post deleted successfully.'
        ]);
    }
}
