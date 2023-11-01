<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V2\TaskController;
use App\Http\Controllers\Api\V2\CompleteTaskControllerV2;



Route::middleware('auth:sanctum')->prefix('V2')->group(function (){
    Route::apiResource('/tasks', TaskController::class);
    Route::patch('/tasks/{task}/complete', CompleteTaskControllerV2::class);
});
