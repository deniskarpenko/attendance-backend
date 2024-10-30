<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Auth\Insfrastructure\Http\Controllers\SocialController;
use App\Auth\Insfrastructure\Http\Controllers\AuthController;

Route::get('auth/redirect', [SocialController::class, 'redirectToProvider']);
Route::group(['prefix' => 'auth', 'name' => 'auth.'], function(){
    Route::get('login', [AuthController::class, 'login'])->name('auth.login');
});
