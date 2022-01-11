<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::view('login', "login")->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::view('/', 'components.dashboard')->middleware('auth');

Route::resource('users', UserController::class)->except('show')->middleware('can:admin');
Route::resource('clients', ClientController::class)->except('show');
Route::resource('projects', ProjectController::class)->except('show');
Route::resource('tasks', TaskController::class)->except('show');
