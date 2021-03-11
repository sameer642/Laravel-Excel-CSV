<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EmployeeController;
use App\http\Controllers\EmpController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addemployee',[EmployeeController::class,'addEmployee']);
Route::get('/export-excel',[EmployeeController::class,'exportIntoExcel']);
Route::get('/export-csv',[EmployeeController::class,'exportIntoCSV']);
Route::get('/get',[EmpController::class,'getAllEmployees']);
Route::get('/download-pdf',[EmpController::class,'downloadPDF']);
