<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () { return view('welcome'); });
Route::get('/salary', function () { return view('salary'); })->middleware('auth')->name('salary');

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/my-projects', [HomeController::class, 'myprojects'])->middleware('auth')->name('my-projects');
Route::get('/employees', [HomeController::class, 'employees'])->middleware('auth')->name('employees');
Route::get('/roles', [HomeController::class, 'roles'])->middleware('auth')->name('roles');
Route::get('/nba', [HomeController::class, 'nba'])->middleware('auth')->name('nba');

Route::get('/country', [HomeController::class, 'countries'])->name('countries');
Route::get('/city', [HomeController::class, 'cities'])->name('cities');

Route::get('/login', function () { return view('auth.login'); });
Route::get('/register', function () { return view('auth.register'); });

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


