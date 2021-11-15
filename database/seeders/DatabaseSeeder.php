<?php

namespace Database\Seeders;

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
        $this->call(UsersTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(ListsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        $this->call(SubTasksTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(TaskCategoryTableSeeder::class);
    }
}
