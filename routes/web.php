<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
  Route::get('/users', 'index')->name('users.index');
  Route::get('/users/{id}', 'show')->name('show-users');
});
