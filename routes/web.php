<?php

use App\Http\Controllers\RegularExpressionController;
use Illuminate\Support\Facades\Route;

Route::get('regex/', [RegularExpressionController::class, 'show']);
