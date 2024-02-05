<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RandomDataController;

Route::get('/', [RandomDataController::class, 'index']);
