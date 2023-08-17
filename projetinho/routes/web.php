<?php

use App\Http\Controllers\CadastroController;
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
/* Usuarios */ 
Route::get('listUser/new', [UserController::class, 'formAddUser'])->name('newUser');
Route::post('listUser/store', [UserController::class, 'storeNewUser'])->name('cadastro.store');
Route::get('listAllUsers', [UserController::class, 'listAllUsers'])->name('listAllUsers');
Route::get('listUser/{user}', [UserController::class, 'listUser'])->name('listUser');

