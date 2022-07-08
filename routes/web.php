<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MonsterController;

Route::get('/', [FrontendController::class, 'index']);
Route::post('/', [MonsterController::class, 'store']);
