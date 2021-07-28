<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\auth\AuthConroller;
use Illuminate\Http\Request;
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

Route::middleware('auth')->group(function () {
    
 



    Route::post('/store-user', [UserController::class, 'store'])
    ->name('user.store')
    ->middleware('auth')->middleware('isAdmin');
    Route::post('/user-update/{id}', [UserController::class, 'update'])->name('user.update')->middleware('isAdmin');
    Route::post('user-delete/{id}', [UserController::class, 'destroy'])->name('user.delete')->middleware('isAdmin');
 
    Route::post('/student-update/{id}', [UserController::class, 'studentupdate'])->name('student.update')->middleware('isAdmin');
    Route::get('Student-Department', [UserController::class, 'student'])->name('student')->middleware('isAdmin');
    Route::post('Student-approved1/{id}', [UserController::class, 'studentApproved'])->name('students.approved')->middleware('isAdmin');
    Route::post('Student-approved/{id}', [UserController::class, 'studentBlocked'])->name('student.Blocked')->middleware('isAdmin');
    
    Route::delete('logout', [AuthConroller::class, 'destroy'])->name('logout');
Route::get('Add-Staff',  [UserController::class, 'index'])->name('librarist')->middleware('isAdmin');

      /////////////////Books/////////////
      Route::get('Books', [BooksController::class, 'index'])->name('books')->middleware('isAdmin');
      Route::post('Add-books',  [BooksController::class, 'AddBook'])->name('add-book')->middleware('isAdmin');
      Route::get('book-unapproved/{id}', [BooksController::class, 'unapproved'])->name('block-unapprove')->middleware('isAdmin');
      Route::get('book-approve/{id}', [BooksController::class, 'approve'])->name('approve-book')->middleware('isAdmin');
      Route::post('book-update/{id}', [BooksController::class, 'update'])->name('book-update')->middleware('isAdmin');
      Route::get('book-destroy/{id}', [BooksController::class, 'destroy'])->name('book-destroy')->middleware('isAdmin');
//////////////////Book borrow ?////////////////////////
Route::get('book-Borrow', [BooksController::class, 'Borrow'])->name('book-borrow')->middleware('isAdmin');




Route::get('Profile-Info', [UserController::class, 'userProfile'])->name('profile.info');
Route::post('Profile-update', [UserController::class, 'profileUpdate'])->name('profile.update');


    
 
Route::middleware('isStudent')->group(function () {
Route::get('Student-Dashboard', [StudentController::class, 'index'])->name('student.dashboard');
    
  




});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard')->middleware('isAdmin');
});

Route::post('front-register', [UserController::class, 'frontRegister'])->name('front.register');
    

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});










