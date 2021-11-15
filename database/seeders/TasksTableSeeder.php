<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\PseudoTypes\False_;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'list_id' => '1',
            'user_id' => '1',
            'name' => 'Tugas Yaumi',
            'reminder_datetime' => '2021-11-14 21:59:00',
            'due_date' => '2021-11-15',
            'attachment_url' => 'pic tugas yaumi',
            'note' => 'lorem',
            'is_complete' => False,
            'is_my_day' => False,
        ]);

        Task::create([
            'list_id' => '1',
            'user_id' => '1',
            'name' => 'Skripsi Utama',
            'reminder_datetime' => '2021-11-14 21:59:00',
            'due_date' => '2021-11-15',
            'attachment_url' => 'gambarnya',
            'note' => 'bismillah cepet selesai, aamiin',
            'is_complete' => true,
            'is_my_day' => true,
        ]);
    }
}
