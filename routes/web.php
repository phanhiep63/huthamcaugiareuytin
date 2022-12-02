<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('ve-chung-toi', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('quy-trinh', [App\Http\Controllers\ProcedureController::class, 'index'])->name('procedure');
Route::get('lien-he', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('thong-cong-nghet', [App\Http\Controllers\ProcedureController::class, 'index'])->name('procedure');
Route::get('hut-ham-cau-be-phot', [App\Http\Controllers\SuctionController::class, 'index'])->name('suction');
