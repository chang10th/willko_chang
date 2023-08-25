<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/visitor',[\App\Http\Controllers\VisitorController::class, 'index'])->name('visitor.index');
Route::get('/visitor/createVisitor',[\App\Http\Controllers\VisitorController::class, 'createVisitor'])->name('visitor.createVisitor');
