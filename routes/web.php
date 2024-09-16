<?php

use App\Http\Controllers\api\userController;
use App\Http\Controllers\api\ClientController;
use App\Http\Controllers\api\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource("user", UserController::class);
Route::apiResource("client", ClientController::class);
Route::apiResource("transaction", TransactionController::class);
