<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\redirectController;
use App\Models\movie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::get('/welcomes', [redirectController::class, "welcomeController"])->name('welcomes');

Route::redirect('/','welcomes');
Auth::routes();

Route::get('/detailMovie/{movie_title}', [redirectController::class, "movieDetail"]);
Route::get('/movies', [redirectController::class, "movieController"])->name("movie");

Route::get('/actors', function(){
    return view('actor');
})->name('actor');

Route::get('profile', [HomeController::class, 'profile'])->name('View Profile');
Route::patch('profile/update/{id}', [HomeController::class, 'updateProfile'])->name('Save Edit Profile');
Route::get('profile/update/{id}', [HomeController::class, 'editProfile'])->name('Update Edit Profile');
Route::patch('profile/image/{id}', [HomeController::class, 'updateImage'])->name('Save Edit Image');
Route::get('profile/image/{id}', [HomeController::class, 'editProfile'])->name('Update Image ');

Route::get('/actors', [redirectController::class, "actorController"]);

//AddMovie
Route::post('movie/add', [HomeController::class, 'store'])->name('Save Movie');
Route::get('movie/add', [HomeController::class, 'create'])->name('Add Movie');

Route::get('/actorDetail/{name}', [redirectController::class, "actorDetail"])->name('actor');

//AddActor
Route::post('actor/add', [HomeController::class, 'storeact'])->name('Save Actor');
Route::get('actor/add', [HomeController::class, 'createact'])->name('Add Actor');

//Update Actor
Route::get('actor/update/{name}/updating', [HomeController::class, 'updateact'])->name('Update Actors');
Route::get('actor/update/{id}', [HomeController::class, 'toUpdateActor'])->name('Page Update Actor');

//Update Movie
Route::get('movie/update/{name}/{actor}/updating', [HomeController::class, 'updatemovie'])->name('Update movie');
Route::get('movie/update/{id}/{name}', [HomeController::class, 'toUpdatemovie'])->name('Page Update Movie');

//Delete Movie
Route::get('movie/delete/{id}', [HomeController::class, 'deletemovie'])->name('Delete Movie');
Route::get('actor/delete/{name}', [HomeController::class, 'deleteactor'])->name('Delete Actor');

Route::get('/watchlist', function(){
    return view('watchlist');
});