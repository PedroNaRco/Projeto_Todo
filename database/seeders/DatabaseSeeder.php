<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //$this->call([UserSeeder::class
        //TaskSeeder::class
        //]);

        User::factory(10)->create();
        Category::factory(10)->create();
        Task::factory(10)->create();

        // User::factory(10)->create();

        //User::factory()->create([
          //  'name' => 'Test User',
           // 'email' => 'test@example.com',
    //    ]);
    }
}
