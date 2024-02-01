<?php

use App\Livewire\Employee\HomeEmployee;
use App\Livewire\Employee\IndexEmployee;
use App\Livewire\Employee\RegisterEmployee;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::name('root.')->prefix('employee')->group(function () {
        Route::get('/', [HomeEmployee::class, 'home'])->name('employee');
        Route::get('/index', [IndexEmployee::class, 'index'])->name('employee.index');
        Route::get('/register', [RegisterEmployee::class, 'register'])->name('employee.register');
    });
});
