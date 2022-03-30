<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsuariosController;
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
    return view('modules.login');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [UsuariosController::class, 'userProfile']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
