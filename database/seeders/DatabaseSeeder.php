<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

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
        User::create([
            'name' => 'ramong1145',
            'email' => 'ramong1145@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Post::factory()->count(10)->create();
    }
}
