<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-db', [App\Http\Controllers\TestController::class, 'index']);