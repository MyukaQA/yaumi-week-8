<?php

namespace Database\Seeders;

use App\Models\Subtask;
use Illuminate\Database\Seeder;

class SubTasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subtask::create([
            'task_id' => '1',
            'name' => 'minggu ke-1',
            'is_complete' => false
        ]);

        Subtask::create([
            'task_id' => '1',
            'name' => 'minggu ke-2',
            'is_complete' => false
        ]);

        Subtask::create([
            'task_id' => '1',
            'name' => 'minggu ke-3',
            'is_complete' => false
        ]);

        Subtask::create([
            'task_id' => '1',
            'name' => 'minggu ke-4',
            'is_complete' => false
        ]);
    }
}
