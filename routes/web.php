<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/create-post', function(){
    $user = \App\Models\User::find(1);
    $post = $user->posts()->create([
        'title' => \Illuminate\Support\Str::random(50),
        'body' => \Illuminate\Support\Str::random(200)
    ]);

    // event(new \App\Events\PostCreated($post));
    echo "Post criado";
});

Route::get('/', function () {
    return view('welcome');
});
