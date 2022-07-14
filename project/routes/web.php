<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Admin\AdminContact;
use App\Http\Controllers\Admin\AdminStock;
use App\Http\Controllers\Admin\AdminProduct;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StocksController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Buy;
use App\Http\Controllers\Admin\AdminCategory;
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

Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::get('/stocks/all', [StocksController::class, 'index'])->name('stocks-all');
Route::get('/stocks/active', [StocksController::class, 'active'])->name('stocks-active');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/{id}', [CatalogController::class, 'category'])->name('catalog-categories');
Route::get('/catalog/{categories_id}/product/{id}', [ProductController::class, 'index'])->name('product');
Route::get('/basket', [Buy::class, 'basket'])->name('basket');
Route::get('/payment', [Buy::class, 'payment'])->name('payment');

//Multi
//Route::get('/', [Frontend::class, 'index'])->name('index');
//Route::get('/', [Frontend::class, 'index'])->name('index');


//Request


//Admin

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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


Route::get('/admin/category', [AdminCategory::class, 'index'])->name('admin-category');
Route::get('/admin/category/new', [AdminCategory::class, 'categoryNew'])->name('admin-category-new');
Route::post('/admin/category/create', [AdminCategory::class, 'categoryCreate'])->name('admin-category-create');
Route::get('/admin/category/{id}/update', [AdminCategory::class, 'categoryUpdate'])->name('admin-category-update');
Route::post('/admin/category/{id}/update', [AdminCategory::class, 'categoryUpdateSubmit'])->name('admin-category-submit');
Route::get('/admin/category/{id}/delete', [AdminCategory::class, 'categoryDelete'])->name('admin-category-delete');



Route::get('/admin/product', [AdminProduct::class, 'index'])->name('admin-product');
Route::get('/admin/product/new', [AdminProduct::class, 'productNew'])->name('admin-product-new');
Route::post('/admin/product/create', [AdminProduct::class, 'productCreate'])->name('admin-product-create');
Route::get('/admin/product/{id}/update', [AdminProduct::class, 'productUpdate'])->name('admin-product-update');
Route::post('/admin/product/{id}/update', [AdminProduct::class, 'productUpdateSubmit'])->name('admin-product-submit');
Route::get('/admin/product/{id}/delete', [AdminProduct::class, 'productDelete'])->name('admin-product-delete');



