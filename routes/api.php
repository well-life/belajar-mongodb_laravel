<?php

use App\Http\Controllers\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return "test";
    // return $request->user();
});

Route::middleware('auth:api')->get('/person', [PersonController::class, 'index']);
Route::get('/person/create', [PersonController::class, 'create'])->name('person.create');
Route::get('/person/edit/{person}', [PersonController::class, 'edit'])->name('person.edit');
Route::put('/person/update/{person}', [PersonController::class, 'update'])->name('person.update');
Route::middleware('auth:api')->post('/person/store', [PersonController::class, 'store'])->name('person.store');
Route::delete('/person/{person}', [PersonController::class, 'destroy'])->name('person.destroy');