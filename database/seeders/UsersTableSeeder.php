<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'mylian',
            'email' => 'mylian@gmail.com',
            'password' => bcrypt('secret'),
            'remember_token' => Str::random(16),
        ]);
    }
}
