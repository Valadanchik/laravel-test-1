<?php

use Illuminate\Support\Facades\Route;

Route::post('/userInfo', [App\Http\Controllers\UserController::class, 'userInfo']);
