<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'create_contact'])->name('contact');



Route::get('/service', function()
{
    return view('service');
});

//all tournaments route
Route::get('/tournaments',[TournamentController::class, 'tournaments']);
Route::post('/tournaments',[TournamentController::class, 'tournaments_filter']);

//single tournament route
Route::get('info_tournament/id/{tourn_id}/',[TournamentController::class, 'info_tournament']);
//register to tournament route
Route::get('reg_to_tourn/id/{user_id}/{tourn_id}',[TournamentController::class, 'reg_to_tourn']);
// Add tournament
Route::get('/add_tournament', [TournamentController::class, 'add_tournament'])->name('home');
Route::post('/create_tournament', [TournamentController::class, 'create_tournament'])->name('home');


// user page 
Route::get('/profile_page', [HomeController::class, 'profile_page'])->name('home');



// user edit 
Route::get('/edit_profile', [HomeController::class, 'edit_profile'])->name('home');
Route::post('/added',  [HomeController::class, 'editPic']);
Route::post('/updateuser',  [HomeController::class, 'updateuser']);





///// alter page


Route::get('/alter', function()
{
    return view('alter_pages/alter');
});
