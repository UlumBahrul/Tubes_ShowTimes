<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //user
        User::create([
            'name' => 'Bahrul ulum',
            'username' => 'bahulum',
            'email' => 'bahulum97@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(4)->create();

        //category
        Category::create([
            'name' => 'Nature',
            'slug' => 'nature'
        ]);

        Category::create([
            'name' => 'Animal',
            'slug' => 'animal'
        ]);


        //posts
        Post::factory(10)->create();
    }
}
