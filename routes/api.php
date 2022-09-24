<?php

use App\Http\Controllers\Api\V1\JobController;
use App\Http\Controllers\Api\V1\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::apiResource('jobs', JobController::class)->only(['index', 'show', 'update']);
Route::apiResource('notes', NoteController::class)->only(['store', 'update']);