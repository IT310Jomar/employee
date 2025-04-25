<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::get('/v1/employees',[EmployeeController::class,'getEmployments']);

    Route::get('/v1/departments',[DepartmentController::class,'displayDepartment']);

    Route::post('/add-department',[DepartmentController::class,'addDepartment']);
});
