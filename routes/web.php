<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class,"login"])->name("login");
Route::get('/home',[HomeController::class,'home'])->name("home");

Route::get('/v1/moderate',[EmployeeController::class,'getEmploymentsData']);
Route::get('/v1/challenging', [EmployeeController::class,'getEmploymentsChallenging']);
Route::get('/v1/difficult', [EmployeeController::class,'getEmploymentsDifficult']);
Route::get('/dashboard/employee', [EmployeeController::class, 'showEmployeePage'])->name('dashboard.employee');


Route::get('/departments',[DepartmentController::class,'getDepartment']);

