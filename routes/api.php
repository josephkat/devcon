<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Api\Http\Controllers\AuthController;
use Api\Http\Controllers\BilletController;
use Api\Http\Controllers\DocController;
use Api\Http\Controllers\FoundAndLostController;
use Api\Http\Controllers\ReservationController;
use Api\Http\Controllers\UnitController;
use Api\Http\Controllers\UserController;
use Api\Http\Controllers\WarningController;
use Api\Http\Controllers\WallController;

Route::get('/get', function() {
    return ['pong'=>true];
});

