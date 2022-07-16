<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AudienceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\CinemaController;

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

// Route::get('/movies',[MovieController::class,'index']);
// Route::get('/movies/create',[MovieController::class,'create']);
// Route::post('/movies',[MovieController::class,'store'])->name('movies.store');

Route::resource('movies',MovieController::class);
Route::resource('audiences', AudienceController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('tickets', TicketsController::class);
Route::resource('cinemas', CinemaController::class);