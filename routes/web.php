<?php

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

use App\Http\Controllers\UtamaController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\CeritaController;

Route::get("/", [UtamaController::class, "home"])->name("home");
Route::get("/about", [UtamaController::class, "about"])->name("about");
Route::get("/pricing", [UtamaController::class, "pricing"])->name("pricing");
Route::get("/portfolio", [UtamaController::class, "portfolio"])->name("portfolio");
Route::get("/services", [UtamaController::class, "services"])->name("services");
Route::get("/team", [UtamaController::class, "team"])->name("team");
Route::get("/contact", [UtamaController::class, "contact"])->name("contact");

Route::get("/biodata", [BiodataController::class, "biodata"])->name("biodata");
Route::post("/biodata/tambah", [BiodataController::class, "tambah"])->name("biodata_tambah");

Route::get("/cerita", [CeritaController::class, "cerita"])->name("cerita");
Route::post("/cerita/tambah", [CeritaController::class, "tambah"])->name("cerita_tambah");