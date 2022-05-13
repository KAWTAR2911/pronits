<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('chefDepartement/home', [HomeController::class, 'chefDepHome'])->name('chefDepartement.departement')->middleware('is_admin');

Route::get('chefProjet/home', [HomeController::class, 'chefProjetHome'])->name('chefProjet.projet')->middleware('is_admin');

Route::get('specialiste/home', [HomeController::class, 'specialistHome'])->name('specialiste.specialiste')->middleware('is_admin');
