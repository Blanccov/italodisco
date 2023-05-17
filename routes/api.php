<?php

use App\Http\Controllers\Api\V1\StudentController;
use App\Http\Controllers\Api\V1\AddressController;
use App\Http\Controllers\Api\V1\DepartamentController;
use App\Http\Controllers\Api\V1\ResultController;
use App\Http\Controllers\Api\V1\RoleController;
use App\Http\Controllers\Api\V1\StudentDepartamentController;
use App\Http\Controllers\Api\V1\UserController;
use App\Models\Role;
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

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function(){
    Route::apiResource('students', StudentController::class);
    Route::apiResource('addresses', AddressController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('departaments', DepartamentController::class);
    Route::apiResource('results', ResultController::class);
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('studentDepartaments', StudentDepartamentController::class);
});
