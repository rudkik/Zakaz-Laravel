<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Admin\AdminContact;
use App\Http\Controllers\Admin\AdminStock;
use App\Http\Controllers\Catalog;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Stocks;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Company;
use App\Http\Controllers\Buy;

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
Route::get('/contacts', [Contact::class, 'index'])->name('contacts');
Route::get('/stocks/all', [Stocks::class, 'index'])->name('stocks-all');
Route::get('/stocks/active', [Stocks::class, 'active'])->name('stocks-active');
Route::get('/catalog', [Catalog::class, 'index'])->name('catalog');
Route::get('/catalog/{categories_id}/product/{id}', [ProductController::class, 'index'])->name('product');
Route::get('/basket', [Buy::class, 'basket'])->name('basket');
Route::get('/payment', [Buy::class, 'payment'])->name('payment');

//Multi
//Route::get('/', [Frontend::class, 'index'])->name('index');
//Route::get('/', [Frontend::class, 'index'])->name('index');


//Request


//Admin

Route::get('/admin/contacts', [AdminContact::class, 'index'])->name('admin-contacts');
Route::get('/admin/contacts/new', [AdminContact::class, 'contactNew'])->name('admin-contacts-new');
Route::post('/admin/contacts/create', [AdminContact::class, 'contactCreate'])->name('admin-contacts-create');
Route::get('/admin/contacts/{id}/update', [AdminContact::class, 'contactUpdate'])->name('admin-contact-update');
Route::post('/admin/contacts/{id}/update', [AdminContact::class, 'contactUpdateSubmit'])->name('admin-contact-submit');
Route::get('/admin/contacts/{id}/delete', [AdminContact::class, 'contactDelete'])->name('admin-contact-delete');


Route::get('/admin/stocks', [AdminStock::class, 'index'])->name('admin-stocks');
Route::get('/admin/stock/new', [AdminStock::class, 'stockNew'])->name('admin-stock-new');
Route::post('/admin/stock/create', [AdminStock::class, 'stockCreate'])->name('admin-stock-create');
Route::get('/admin/stock/{id}/update', [AdminStock::class, 'stockUpdate'])->name('admin-stock-update');
Route::post('/admin/stock/{id}/update', [AdminStock::class, 'stockUpdateSubmit'])->name('admin-stock-submit');
Route::get('/admin/stock/{id}/delete', [AdminStock::class, 'stockDelete'])->name('admin-stock-delete');



