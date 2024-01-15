<?php

use App\Http\Controllers\Api\HumanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/lew/310669/people', [HumanController::class, 'index']);
Route::get('/lew/310669/people/{human}', [HumanController::class, 'show']);
Route::post('/lew/310669/people/{human}', [HumanController::class, 'store']);
Route::put('/lew/310669/people/{human}', [HumanController::class, 'update']);
Route::delete('/lew/310669/people/{human}', [HumanController::class, 'destroy']);


