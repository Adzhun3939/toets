<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DocentVakController;

Route::get('/docents', [DocentVakController::class, 'docents']);
Route::get('/vaks', [DocentVakController::class, 'vaks']);

Route::post('/docents', [DocentVakController::class, 'storeDocent']);
Route::post('/vaks', [DocentVakController::class, 'storeVak']);
