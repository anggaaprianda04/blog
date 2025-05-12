<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blogs', function () {
    return view('blogs', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/blogs/{slug}', function ($slug) {

    $post = Post::find($slug);

    return view('blog', ['title' => 'Single Blog', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
