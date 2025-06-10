<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;


Route::get('/', function () {
    return view('goals.index');
});



Route::get('/', fn () => redirect('/goals'));
Route::resource('goals', GoalController::class);




