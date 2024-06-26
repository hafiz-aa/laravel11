<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science',
            'color' => 'red',
        ]);
        Category::create ([
            'name' => 'Programming',
            'slug' => 'programming',
            'color' => 'green',
        ]);
        Category::create ([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'blue',
        ]);
    }
}
