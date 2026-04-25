<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = [
        ['title' => 'My First Post', 'body' => 'This is my first post!'],
        ['title' => 'Learning Laravel', 'body' => 'Laravel is quite similar to Express'],
        ['title' => 'Running on a Pi', 'body' => 'Served from a Pi W Zero'],
    ];

    return view('home', ['posts' => $posts]);
});
