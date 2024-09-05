<?php

use Illuminate\Support\Facades\Route;

Route::post('/submissions', [App\Http\Controllers\SubmissionController::class, 'store']);
