<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/posts', 301);

Route::resource('posts', PostController::class)
    ->only(['index', 'show', 'create', 'store']);

