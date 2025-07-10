<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Task1',
            'description' => 'Description for Task1',
            'due_date' => '2023-12-31',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
