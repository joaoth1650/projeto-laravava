<?php

use App\Http\Controllers\Form\TestController;
use App\Http\Controllers\FristController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('listAllUsers', [UserController::class, 'listAllUsers']);
Route::get('listUser/{user}', [UserController::class, 'listUser']);
