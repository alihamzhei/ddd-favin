<?php

use App\User\Presentation\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/register', [UserRegisterController::class , 'register']);
