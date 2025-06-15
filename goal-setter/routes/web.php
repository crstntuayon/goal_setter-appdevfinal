<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;

Route::get('/', function () {
    return view('/goals/create');
});



Route::get('/', fn () => redirect('/goals'));
Route::resource('goals', GoalController::class);


Route::delete('/goals/{id}', [GoalController::class, 'destroy'])->name('goals.destroy');
Route::get('/goals/{goal}/edit', [GoalController::class, 'edit'])->name('goals.edit');
Route::put('/goals/{goal}', [GoalController::class, 'update'])->name('goals.update');


Route::post('/goals', [GoalController::class, 'store'])->name('goals.store');
Route::get('/goals/create', [GoalController::class, 'create'])->name('goals.create');

