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

        User::create([
            'name'=>"Patrick",
            'username'=>"patrick123",
            'email'=>"patrick@gmail.com",
            'password'=>bcrypt('12345')
        ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming',
        ]);
        
        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design',
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
        ]);

        Post::factory(20)->create();
    }
}
