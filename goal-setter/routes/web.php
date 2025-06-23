<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Middleware\AuthCheck;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('login');
});


// Auth
//Login
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/user-login', [AuthController::class, 'login'])->name('auth.login');

// Register
Route::get('/register', [AuthController::class, 'indexRegister'])->name('auth.register');
Route::post('/user-register', [AuthController::class, 'userRegister'])->name('auth.userRegister');

Route::middleware([AuthCheck::class])->group(function () {



Route::get('/', fn () => redirect('/goals'));
Route::resource('goals', GoalController::class);


Route::delete('/goals/{id}', [GoalController::class, 'destroy'])->name('goals.destroy');
Route::get('/goals/{goal}/edit', [GoalController::class, 'edit'])->name('goals.edit');
Route::put('/goals/{goal}', [GoalController::class, 'update'])->name('goals.update');


Route::post('/goals', [GoalController::class, 'store'])->name('goals.store');
Route::get('/goals/create', [GoalController::class, 'create'])->name('goals.create');

Route::get('/goals', [GoalController::class, 'index'])->name('goals.index');


Route::resource('goals.notes', NoteController::class);

Route::post('/goals/{goal}/notes', [NoteController::class, 'store'])->name('goals.notes.store');
Route::resource('goals.notes', NoteController::class)->only(['store', 'destroy']);

Route::delete('/goals/{goal}/notes/{note}', [NoteController::class, 'destroy'])->name('goals.notes.destroy');


  // Logout
  Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

});