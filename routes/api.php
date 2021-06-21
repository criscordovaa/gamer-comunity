<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\GameController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("admin")->as("admin.")->group(function () {
    Route::prefix("profiles")->as("profile.")->group(function (){
        Route::get("/", [ProfileController::class, "index"])->name("index");
    });

    Route::prefix("companies")->as("companies.")->group(function (){
        Route::get("/", [CompanyController::class, "index"])->name("index");
    });

    Route::prefix("consoles")->as("consoles.")->group(function (){
        Route::get("/", [ConsoleController::class, "index"])->name("index");
    });

    Route::prefix("games")->as("games.")->group(function (){
        Route::get("/", [GameController::class, "index"])->name("index");
    });
});
