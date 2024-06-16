<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming',
        ]);
        
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
        ]);

        Post::factory(20)->create();
    }
}
