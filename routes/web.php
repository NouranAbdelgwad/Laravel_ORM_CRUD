<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/", [CompaniesController::class, "index"]);
Route::get("/archive", [CompaniesController::class, "archive"]);
Route::get("/restore/{id}", [CompaniesController::class, "restore"]);
Route::get("/edit/{id}", [CompaniesController::class, "edit"]);


Route::post("/index", [CompaniesController::class, "store"]);
Route::delete("/delete/{id}", [CompaniesController::class, "destroy"]);
Route::put("/edited/{id}", [CompaniesController::class, "update"]);
