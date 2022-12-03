<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\PagesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


/* public route definition */
Route::get('/', [PagesController::class, 'home'])->name('home.index');
Route::get('/inscription', [PagesController::class, 'inscription'])->name('home.inscription');
Route::get('/about', [PagesController::class, 'about'])->name('home.about');
Route::get('/event', [PagesController::class, 'event'])->name('home.event');
Route::get('/exposition', [PagesController::class, 'exposition'])->name('home.exposition');
Route::get('/concours', [PagesController::class, 'enregistrement'])->name('home.concours');
Route::get('/ateliers', [PagesController::class, 'ateliers'])->name('home.ateliers');
Route::get('/contact', [PagesController::class, 'contact'])->name('home.contact');
Route::get('/sponsor', [PagesController::class, 'sponsor'])->name('home.sponsor');
Route::get('/enregistrement', [PagesController::class, 'enregistrement'])->name('home.enregistrement');
Route::get('/project', [PagesController::class, 'project'])->name('home.project');
Route::get('/sponsoring/{id}', [PagesController::class, 'sponsoring'])->name('home.sponsoring');
Route::get('/inscription', [PagesController::class, 'register'])->name('home.register');
Route::get('/contact', [PagesController::class, 'contact'])->name('home.contact');
Route::get('/program', [PagesController::class, 'program'])->name('home.program');



/* private route definition ?? administration **/
Route::get('/member/register', [MemberController::class, 'index'])->name('home.participant.index');
Route::post('/member/register', [MemberController::class, 'activeMember'])->name('home.participation.save');
