<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;

Route::resource('/manager/roles', RoleController::class)
    ->middleware('auth');
