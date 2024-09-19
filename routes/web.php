<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Karina Rahmawati', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Karina Rahmawati',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur commodi ullam ratione adipisci fugiat cupiditate, repellat illum, amet, ea quo exercitationem consequatur et omnis natus dicta suscipit magnam maiores. Dolore?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Karina Rahmawati',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quisquam accusamus numquam in quae, odit doloribus modi obcaecati excepturi maiores! Optio neque enim cum eaque quis debitis similique mollitia est!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Karina Rahmawati',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur commodi ullam ratione adipisci fugiat cupiditate, repellat illum, amet, ea quo exercitationem consequatur et omnis natus dicta suscipit magnam maiores. Dolore?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Karina Rahmawati',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quisquam accusamus numquam in quae, odit doloribus modi obcaecati excepturi maiores! Optio neque enim cum eaque quis debitis similique mollitia est!'
        ]
    ];
 
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
