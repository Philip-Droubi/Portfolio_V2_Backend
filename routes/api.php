<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::controller(PortfolioController::class)->group(function () {
    Route::get('/portfolio', 'portfolio');
});
