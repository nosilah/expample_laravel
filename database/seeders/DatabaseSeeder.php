<?php

namespace Database\Seeders;

use App\Models\BlogPost;
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
        // $this->call(UsersTableSeeder::class);
        // $this->call(BlogCategoriesTableSeeder::class);
        // $this->call(BlogPostTableSeeder::class);

        $this->call([
            UsersTableSeeder::class,
            BlogCategoriesTableSeeder::class,
            BlogPostTableSeeder::class,
        ]);
        // BlogPost::factory(100)->create();
        
        // Factory(\App\Models\BlogPost::class, 100)->create();

        
    }
}
