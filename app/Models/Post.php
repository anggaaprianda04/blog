<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Unknown 1',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, reiciendis voluptatum ab est qui fugiat, doloribus, atque beatae enim fuga laudantium exercitationem tempora animi at assumenda officiis? Inventore, eveniet debitis!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Unknown 2',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, reiciendis voluptatum ab est qui fugiat, doloribus, atque beatae enim fuga laudantium exercitationem tempora animi at assumenda officiis? Inventore, eveniet debitis!'
            ],
            [
                'id' => 3,
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artikel 3',
                'author' => 'Unknown 3',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, reiciendis voluptatum ab est qui fugiat, doloribus, atque beatae enim fuga laudantium exercitationem tempora animi at assumenda officiis? Inventore, eveniet debitis!'
            ],
        ];
    }

    public static function find($slug): array
    {
        // Callback
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // Arrow Fucntion
        // return Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
