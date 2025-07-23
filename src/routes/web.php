<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


// Route::get('/', function () {
//     return view('hello');
// });
Route::get('/', [MovieController::class, 'index'])->name('movies.index');
