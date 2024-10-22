<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ResumeController::class, 'index']);
