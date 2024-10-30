<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Auth\Insfrastructure\Http\Controllers\SocialController;

Route::get('auth/redirect', [SocialController::class, 'redirectToProvider']);
