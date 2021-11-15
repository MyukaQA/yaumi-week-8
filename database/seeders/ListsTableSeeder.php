<?php

namespace Database\Seeders;

use App\Models\Lists;
use Illuminate\Database\Seeder;

class ListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lists::create([
            'color_id' => '1',
            'user_id' => '1',
            'name' => 'mylian_1',
            'password' => bcrypt('secret'),
        ]);

        Lists::create([
            'color_id' => '2',
            'user_id' => '1',
            'name' => 'mylian_2',
            'password' => bcrypt('secret'),
        ]);

        Lists::create([
            'color_id' => '2',
            'user_id' => '1',
            'name' => 'mylian_2_1',
            'password' => bcrypt('secret'),
        ]);
    }
}
