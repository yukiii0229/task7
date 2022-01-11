<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;

Route::get('/', [todoController::class, 'todo']);
Route::post('/todo/create', [todoController::class, 'todo']);
