<?php

use App\Http\Controllers\PagesController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

Route::get('/', [PagesController::class, 'home'])->name('home.index');
Route::get('/inscription', [PagesController::class, 'inscription'])->name('home.inscription');
Route::get('/about', [PagesController::class, 'about'])->name('home.about');
Route::get('/event', [PagesController::class, 'event'])->name('home.event');
Route::get('/exposition', [PagesController::class, 'exposition'])->name('home.exposition');
Route::get('/concours', [PagesController::class, 'enregistrement'])->name('home.concours');
Route::get('/contact', [PagesController::class, 'contact'])->name('home.contact');
Route::get('/sponsor', [PagesController::class, 'sponsor'])->name('home.sponsor');
Route::get('/enregistrement', [PagesController::class, 'enregistrement'])->name('home.enregistrement');
// Route::get('/concours', [PagesController::class, 'enregistrement'])->name('home.enregistrement');
Route::get('/project', [PagesController::class, 'project'])->name('home.project');
Route::get('/sponsoring/{id}', [PagesController::class, 'sponsoring'])->name('home.sponsoring');
Route::get('/inscription', [PagesController::class, 'register'])->name('home.register');
Route::get('/contact', [PagesController::class, 'contact'])->name('home.contact');
Route::get('/program', [PagesController::class, 'program'])->name('home.program');
Route::get('/event', [PagesController::class, 'event'])->name('home.event');


