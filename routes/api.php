<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/example', function () {
    return response()->json(['message' => 'Hello from Laravel!']);
});


Route::post('users', [UsersController::class, 'store']);
Route::get('users', [UsersController::class, 'index']);

// Define a simple route
Route::get('/users', function () {
    return User::all();
});

// Define a route that uses a controller method
Route::get('/posts', [PostsController::class, 'index']);
// Route with dynamic parameter
Route::get('/posts/{id}', [PostsController::class, 'show']);
// Route with a POST request
Route::post('/posts', [PostsController::class, 'store']);
