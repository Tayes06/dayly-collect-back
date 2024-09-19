<?php
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\api\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ressources\UserController as RessourceUser;
use App\Http\Controllers\ressources\ClientController as Client;
Route::get('/', function () {
    return view('welcome');
});

Route::apiResource("user", UserController::class);
Route::apiResource("client", ClientController::class);
Route::apiResource("transaction", TransactionController::class);

Route::get("/user.list", [RessourceUser::class, "index"]);
Route::post("/user.store", [RessourceUser::class, "store"]);
Route::get("/user.show/{id}", [RessourceUser::class, "show"]);

Route::get("/client.list", [Client::class, "index"]);
Route::post("/client.store", [Client::class, "store"]);
Route::get("/client.show/{id}", [Client::class, "show"]);