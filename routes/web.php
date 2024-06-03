<?php

use App\User\Presentation\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});