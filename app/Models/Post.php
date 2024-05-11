<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'article-1',
                'title' => 'Article 1',
                'author' => 'Muhammad Hafiz',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed veritatis, beatae officia magnam et quasi provident inventore asperiores ea quas.',
            ],
            [
                'id' => 2,
                'slug' => 'article-2',
                'title' => 'Article 2',
                'author' => 'Muhammad Hafiz',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, voluptate. Unde cupiditate rerum deleniti, ducimus voluptates ipsam error. Aperiam dolorum amet voluptatibus neque vero!'
            ],
        ];
    }

    public static function find($slug) {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] === $slug);

        if(!$post) {
            abort(404);
     }
    return $post;
  }   
}