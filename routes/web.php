<?php

use App\Models\Color;
use App\Models\Lists;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function () {
    // $color = Color::where('id','2')->first();
    // $user = User::where('id','1')->first();
    // $list = Lists::first();
    // echo $user->task()->count();
    // echo $list->user->name;
});
