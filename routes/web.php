<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\HomeDashBoard;
use App\Livewire\Dashboard\IndexDashBoard;

use App\Livewire\Employee\HomeEmployee;
use App\Livewire\Employee\IndexEmployee;
use App\Livewire\Employee\RegisterEmployee;

use App\Livewire\Service\IndexService;
use App\Livewire\Service\HomeService;
use App\Livewire\Service\RegisterService;
use App\Livewire\Service\RegisterProduct;
use App\Livewire\Service\RegisterPackage;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::name('root.')->prefix('dashboard')->group(function () {
      Route::get('/', [HomeDashBoard::class, 'home'])->name('dashboard.home');
      Route::get('/index', [IndexDashBoard::class, 'index'])->name('dashboard.index');
    });

    Route::name('root.')->prefix('employee')->group(function () {
        Route::get('/', [HomeEmployee::class, 'home'])->name('employee');
        Route::get('/index', [IndexEmployee::class, 'index'])->name('employee.index');
    });

    Route::name('root.')->prefix('service')->group(function () {
        Route::get('/', [HomeService::class, 'home'])->name('service');
        Route::get('/index', [IndexService::class, 'index'])->name('service.index');
    });

    Route::name('root.')->prefix('register')->group(function () {
        Route::get('/employee', [RegisterEmployee::class, 'register'])->name('register.employee');
        Route::get('/service', [RegisterService::class, 'register'])->name('register.service');
        Route::get('/product', [RegisterProduct::class, 'register'])->name('register.product');
        Route::get('/package', [RegisterPackage::class, 'register'])->name('register.package');
    });

});
