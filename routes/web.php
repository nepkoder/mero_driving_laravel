<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\DOCSController;
use App\Http\Controllers\backend\FirstpageController;
use App\Http\Controllers\backend\uicardsController;
use App\Http\Controllers\backend\FormsController;
use App\Http\Controllers\backend\PagesController;
use App\Http\Controllers\backend\tableController;
use App\Http\Controllers\backend\UIElementsController;
use App\Http\Controllers\CustomersController;




Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/docs', [DOCSController::class, 'index'])->name('docs');

Route::get('/bootstrap-components', [UIElementsController::class, 'bootstrapComponents'])->name('bootstrap-components');
Route::get('/ui-cards', [UIElementsController::class, 'uiCards'])->name('ui-cards');
Route::get('/widgets', [UIElementsController::class, 'widgets'])->name('widgets');

Route::get('/form-components', [FormsController::class, 'formComponents'])->name('form-components');
Route::get('/form-samples', [FormsController::class, 'fomrSamples'])->name('form-samples');

Route::get('/table-data', [tableController::class, 'tableData'])->name('table-data-table');
Route::get('/tables-basic', [tableController::class, 'tableBasic'])->name('table-basic');

Route::get('/blank-page', [PagesController::class, 'blankPage'])->name('blank-page');



Route::get('/page-mailbox', [PagesController::class, 'mailbox'])->name('page-mailbox');
Route::get('/page-user', [PagesController::class, 'user'])->name('page-user');
Route::get('/page-error', [PagesController::class, 'error'])->name('page-error');
Route::get('/page-invoice', [PagesController::class, 'invoice'])->name('page-invoice');
Route::get('/page-lockscreen', [PagesController::class, 'lockscreen'])->name('page-lockscreen');

Route::get('/', [FirstpageController::class, 'index'])->name('firstpage');

// Route::get('/customers',function(){
//     $customers = Customers::all();
//     echo "<pre>";
//     print_r($customers->toArray());

// });
Route::get('/page-login', [CustomersController::class, 'login'])->name('page-login');
Route::post('/customers', [CustomersController::class, 'store'])->name('customers.login');