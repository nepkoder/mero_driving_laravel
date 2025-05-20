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
use App\Http\Controllers\UserController;


use App\Http\Controllers\InstructorController;

use App\Http\Controllers\UserdataController;

use App\Http\Controllers\RateController;

use App\Http\Controllers\VehicleController;

use App\Http\Controllers\CustomerController;






Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Route::get('/docs', [DOCSController::class, 'index'])->name('docs');

// Route::get('/bootstrap-components', [UIElementsController::class, 'bootstrapComponents'])->name('bootstrap-components');
// Route::get('/ui-cards', [UIElementsController::class, 'uiCards'])->name('ui-cards');
// Route::get('/widgets', [UIElementsController::class, 'widgets'])->name('widgets');

// Route::get('/form-components', [FormsController::class, 'formComponents'])->name('form-components');
// Route::get('/form-samples', [FormsController::class, 'formSamples'])->name('form-samples');

// Route::get('/table-data', [tableController::class, 'tableData'])->name('table-data-table');
// Route::get('/tables-basic', [tableController::class, 'tableBasic'])->name('table-basic');

// Route::get('/blank-page', [PagesController::class, 'blankPage'])->name('blank-page');



// Route::get('/page-mailbox', [PagesController::class, 'mailbox'])->name('page-mailbox');
// Route::get('/page-user', [PagesController::class, 'user'])->name('page-user');
// Route::get('/page-error', [PagesController::class, 'error'])->name('page-error');
// Route::get('/page-invoice', [PagesController::class, 'invoice'])->name('page-invoice');

Route::get('/page-lockscreen', [PagesController::class, 'lockscreen'])->name('page-lockscreen');

Route::get('/', [FirstpageController::class, 'index'])->name('firstpage');


Route::get('/page-login', [UserController::class, 'login'])->name('page-login');

Route::post('/customers', [UserController::class, 'store'])->name('customers.store');






Route::get('/instructormanagement', [InstructorController::class, 'create'])->name('instructormanagement');
Route::post('/instructormanagement', [InstructorController::class, 'store'])->name('instructors.store');

Route::get('/usermanagement', [UserdataController::class, 'create'])->name('usermanagement');
Route::post('/usermanagement', [UserdataController::class, 'store'])->name('user.store');
Route::get('/userlist', [UserdataController::class, 'records'])->name('Userlist');


Route::get('/ratemanagement', [RateController::class, 'create'])->name('ratemanagement');
Route::post('/ratemanagement', [RateController::class, 'store'])->name('rate.store');

Route::get('/vehiclemanagement', [VehicleController::class, 'create'])->name('vehiclemanagement');
Route::post('/vehiclemanagement', [VehicleController::class, 'store'])->name('vehicles.store');
Route::get('vehiclelist', [VehicleController::class, 'records'])->name('Vehiclelist');

Route::get('/customermanagement', [CustomerController::class, 'create'])->name('customermanagement');
Route::post('/customerpost', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customerlist', [CustomerController::class, 'records'])->name('Customerlist');