<?php

use App\Http\Controllers\pemainController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [pemainController::class, 'index']);
