<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('games', [GameController::class, 'index']);
Route::get('game/{game:id}/{slug?}', [GameController::class, 'show'])->name('games.show');
