<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;
use App\Http\Controllers\MensajeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix("v1")->group(function (){

    Route::get("/mensaje", [MensajeController::class,"mensaje"]);


});