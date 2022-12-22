<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EmployeeController;
use App\http\Controllers\JobController;
use App\http\Controllers\ContractController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return redirect("/employee");});

Route::get("/employee",[EmployeeController::class,'show_all_employee']);
Route::get("/employee/edit/{employee}",[EmployeeController::class,'show_edit_employee']);
Route::post("/employee",[EmployeeController::class,'add_employee']);
Route::put("/employee/{employee}",[EmployeeController::class,'edit_employee']);
Route::delete("/employee/delete/{employee}",[EmployeeController::class,'remove_employee']);

Route::get("/job",[JobController::class,'show_all_job']);
Route::get("/job/edit/{job}",[JobController::class,'show_edit_job']);
Route::post("/job",[JobController::class,'add_job']);
Route::put("/job/{job}",[JobController::class,'edit_job']);
Route::delete("/job/delete/{job}",[JobController::class,'remove_job']);

Route::get("/contract",[ContractController::class,'show_all_contract']);
Route::get("/contract/edit/{contract}",[ContractController::class,'show_edit_contract']);
Route::post("/contract",[ContractController::class,'add_contract']);
Route::put("/contract/{contract}",[ContractController::class,'edit_contract']);
Route::delete("/contract/delete/{contract}",[ContractController::class,'remove_contract']);