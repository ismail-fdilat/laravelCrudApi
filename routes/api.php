<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\postController;
/*app/Models/Post.php
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// posts
//get All posts api/posts
//post single post api/posts/id
//update post api/posts/id
//delete post api/posts/id

//to  Create a Post module we need :
//1. create database
//2 . create model to connect to the databse 
//2.5 create a service ? eloquent (ORM)
// 3. create a controller to get dat from the database 
// 4 . return data 

//          Long way to do routes 

// Route::get("/posts",'postcontroller@index');
// Route::get("/posts",'postcontroller@show');
// Route::post("/posts",'postcontroller@store');
// Route::put("/posts",'postcontroller@update');
// Route::delete("/posts",'postcontroller@destroy');

//            Short way to do routes
 Route::resource("posts", postController::class);


Route::get("/testApi", function () {
    return ["message" => "hello world"];
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
