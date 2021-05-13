<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SearchController;

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

Route::get('/', HomeController::class)->name('home');
Route::get('institution', [FormController::class, 'institution'])->name('form.institution');
Route::get('years', [FormController::class, 'years'])->name('form.years');
Route::get('year/{year}', [FormController::class, 'year'])->name('form.year');
Route::get('information', [FormController::class, 'information'])->name('form.information');
Route::get('action/{action}', [FormController::class, 'action'])->name('form.action');

Route::get('search/institutions', [SearchController::class, 'institutions'])->name('search.institutions');
Route::get('search/textos', [SearchController::class, 'textos'])->name('search.textos');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
