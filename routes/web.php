<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
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




// Dashboard 

Route::get('log', [NewController::class, 'displaylogin'] );
Route::get('Dashbord', [NewController::class, 'displaydash']);
Route::get('Users', [NewController::class, 'displayUsers']);
Route::get('Requets', [NewController::class, 'displayRequests']);
Route::get('Categories', [NewController::class, 'displayCategories']);

Route::get('Sliders', [NewController::class, 'displaySliders']);

Route::get('acceptuser/id/{id}', [NewController::Class,'acceptuser']);
Route::get('utable', [NewController::class, 'displayUTables'] );
Route::get('stable', [NewController::class, 'displaySTables'] );
Route::get('utable', [NewController::Class,'viewData']);
Route::get('/deleteUser/id/{id}', [NewController::class, 'deleteData']);
Route::get('create', [NewController::Class,'Viewadd']);
Route::post('create', [NewController::class, 'insert_user']);
Route::get('/editus/id/{id}', [NewController::class, 'editData']);
Route::put('/updateus/id/{id}', [NewController::class, 'updateData']);
Route::get('etable', [NewController::class, 'displayETables'] );
Route::get('etable', [NewController::Class,'viewElderData']);
Route::get('createElder', [NewController::Class,'Viewaddd']);
Route::post('createElder', [NewController::class, 'createElderData']);
// wfdsfd
Route::get('createCategory', [NewController::class, 'viewcreateCategory']);
Route::post('createCategory', [NewController::class, 'createCategory']);

Route::get('createSlider', [NewController::class, 'viewcreateSlider']);

Route::post('createSlider', [NewController::class, 'createSlider']);
Route::get('/delete/id/{id}', [NewController::class, 'deleteElderData']);
Route::get('/delete_category/id/{id}', [NewController::class, 'delete_category']);

Route::get('/delete_slider/id/{id}', [NewController::class, 'delete_slider']);

Route::get('/edit/id/{id}', [NewController::class, 'editElderData']);
Route::put('/updateElder/id/{id}', [NewController::class, 'updateElderData']);
Route::post('logg', [NewController::Class, 'viewlogindata']);
Route::get('Dashbord',  [NewController::class, 'showdynamicdata']);
Route::get('PendingUsers',  [NewController::class, 'displayPenUsers']);
Route::get('PendingRequests',  [NewController::class, 'displayPenReq']);
Route::get('PendingUsers', [NewController::Class,'viewdashData']);
Route::get('PendingRequests', [NewController::Class,'viewdashreqData']);
Route::get('acceptreq/id/{id}', [NewController::Class,'Acceptreq']);
Route::get('/denyUser/id/{id}', [NewController::class, 'denyData']);
Route::get('/denyreq/id/{id}', [NewController::class, 'denyreq']);





// end dashboard

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact_us']);


Route::post('/contact', [App\Http\Controllers\ContactController::class, 'create_contact'])->name('contact');
Route::post('/contact2', [App\Http\Controllers\ContactController::class, 'create_contact2'])->name('contact2');




Route::get('/service', function()
{
    return view('service');
});

//all tournaments route
Route::get('/tournaments',[TournamentController::class, 'tournaments']);
Route::get('/tournaments/{category}',[HomeController::class,'home_tournaments']);
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



// news page 


Route::get('/news', function()
{
    return view('news');
});

