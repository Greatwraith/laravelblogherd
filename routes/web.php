<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Category;



Route::get('/', function () {
    return view('welcome', ['title' => 'Home page']);
});




Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' =>  
    Post::filter(request(['search', 'category', 'author']))->latest()->paginate(12)->withQueryString()]);
});




Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', [
        'title' => count($user->posts) . ' Articles by ' . $user->name,
        'posts' => $user->posts
    ]);
});


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' =>  'Articles in: ' . $category->name,
        'posts' => $category->posts
    ]);
});


Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single post', 'post' => $post]);
});



Route::get('/about', function () {
    return view('about', ['name' => 'Ardhan Rahman' , 'title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});