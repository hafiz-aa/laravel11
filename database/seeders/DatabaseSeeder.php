<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       

        // Category::create([
        //     'name' => 'Data Science',
        //     'slug' => 'data-science',
        // ]);

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quidem?',
        // ]);

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);

        Post::factory(30)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }   
        
}
