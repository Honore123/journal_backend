<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\UserController;


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
Route::group(['middleware'=>['auth:sanctum']],function (){
    Route::prefix('/journals')->group(function (){
        Route::get('/{user}', [JournalController::class,'index']);
        Route::post('', [JournalController::class,'store']);
        Route::put('/{journal}',[JournalController::class,'update']);
        Route::delete('/{journal}',[JournalController::class,'destroy']);
    });
    Route::prefix('/users')->group(function (){
        Route::post('/logout',[AuthController::class,'logout']);
    });
});

Route::prefix('/users')->group(function (){
    Route::post('login', [AuthController::class,'login']);
    Route::post('register', [UserController::class,'store']);
});



