<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Sangat Penting',
        ]);

        Category::create([
            'name' => 'Penting',
        ]);

        Category::create([
            'name' => 'normal',
        ]);
    }
}
