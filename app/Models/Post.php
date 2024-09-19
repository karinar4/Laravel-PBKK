<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all(){
        return [
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
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        } 

        return $post;
    }
}
