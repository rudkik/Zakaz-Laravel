<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Company;
use App\Http\Controllers\Contacts;
use App\Http\Controllers\Category;
use App\Http\Controllers\Product;
use App\Http\Controllers\Stock;

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
//Single
Route::get('/', [Frontend::class, 'index'])->name('main');

Route::get('/company', [Company::class, 'index'])->name('company');
Route::get('/contacts', [Company::class, 'index'])->name('contacts');

//Multi
//Route::get('/', [Frontend::class, 'index'])->name('index');
//Route::get('/', [Frontend::class, 'index'])->name('index');


//Request



