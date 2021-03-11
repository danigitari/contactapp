<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ContactApiController;

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

Route::get("list",[DashBoardController::class,'list']);
Route::get("list/{id}",[DashBoardController::class,'listid']);
Route::put("update/{id}",[DashBoardController::class,'upload']);
// Route::post('/dashboard',[DashBoardController::class,'store']);
Route::delete('/delete/{id}',[DashBoardController::class,'delete']);
Route::post('/add/{id}',[DashBoardController::class,'store']);
// Route::get("add",[DashBoardController::class,'list']);


Route::put("updatecontact/{id}",[DashBoardController::class,'update']);
