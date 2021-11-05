<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\AuthorController;
use App\Http\controllers\BookController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Public route user
Route::get('/author',[AuthorController::class, 'index']);
Route::get('/author/{id}',[AuthorController::class,'show']);
//Private route user
Route::post('/author',[AuthorController::class, 'store']);
Route::put('/author/{id}',[AuthorController::class, 'update']);
Route::delete('/author/{id}', [AuthorController::class, 'destroy']);

//Public route user
Route::get('/book',[BookController::class, 'index']);
Route::get('/book/{id}',[BookController::class,'show']);
//Private route user
Route::post('/book',[BookController::class, 'store']);
Route::put('/book/{id}',[BookController::class, 'update']);
Route::delete('/book/{id}', [BookController::class, 'destroy']);