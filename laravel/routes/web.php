<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FirstController;

Route::get('/info/server', [FirstController::class, 'serverInfo']);
Route::get('/info/client', [FirstController::class, 'clientInfo']);
Route::get('/info/database', [FirstController::class, 'databaseInfo']);