<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Marqoms',
            'body' => 'Lorem ipsum dolor sit amet
consectetur adipisicing elit. Itaque, rerum veniam. Iure, expedita corrupti
veritatis esse earum maiores cupiditate est illo dolorum consectetur error
sapiente, temporibus vel. Neque,tempora quos',
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Marqoms',
            'body' => 'Lorem ipsum dolor, sit amet consectetur
adipisicing elit. Repellendus quidem, voluptatibus a quisquam quae numquam eum
soluta porro atque at placeat blanditiis ex harum et ratione aliquid reiciendis
nostrum cupiditate.',
        ],
    ];
    return view('posts', ['title' => 'blog', 'posts' => $posts]);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
