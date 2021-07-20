<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\auth\AuthConroller;

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

Route::post('/store-user', [UserController::class, 'store'])
->name('user.store')
->middleware('auth');
Route::post('/user-update/{id}', [UserController::class, 'update'])->name('user.update');
Route::post('user-delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
Route::post('front-register', [UserController::class, 'frontRegister'])->name('front.register');
 
Route::delete('logout', [AuthConroller::class, 'destroy'])
->name('logout');


 

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('Add-libraries',  [UserController::class, 'index'])->name('librarist');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
