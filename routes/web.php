<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PersonController;
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
    return redirect('/person');
});

Route::get('/show', function(){
    return view('person.show');
});

Route::get('/person', [PersonController::class, 'index']);
Route::get('/person/create', [PersonController::class, 'create'])->name('person.create');
Route::get('/person/show/{person}', [PersonController::class, 'show'])->name('person.show');
Route::get('/person/edit/{person}', [PersonController::class, 'edit'])->name('person.edit');
Route::put('/person/update/{person}', [PersonController::class, 'update'])->name('person.update');
Route::post('/person/store', [PersonController::class, 'store'])->name('person.store');
Route::delete('/person/{person}', [PersonController::class, 'destroy'])->name('person.destroy');

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::put('/contact/{contact}/update', [ContactController::class, 'update'])->name('contact.update');
Route::delete('/contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
