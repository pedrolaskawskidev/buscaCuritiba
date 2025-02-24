<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::prefix('pdf')->controller(PDFController::class)->group(function(){
        Route::get('/{string}/domain', [PDFController::class, 'generatePDFDomain'])->name('pdf.domain');
        Route::get('/owner', [PDFController::class, 'generatePDFOwner'])->name('pdf.owner');

    });

    Route::prefix('domain')->controller(DomainController::class)->group(function(){
        Route::get('/index', 'index')->name('domain.index');
        Route::get('/create', 'create')->name('domain.create');
        Route::post('/store', 'post')->name('domain.store');
        Route::get('/{id}/edit', 'edit')->name('domain.edit');
        Route::put('/{id}/update', 'update')->name('domain.update');
        Route::get('/{id}/destroy', 'destroy')->name('domain.destroy');
    });

    Route::prefix('owner')->controller(OwnerController::class)->group(function(){
        Route::get('/index', 'index')->name('owner.index');
        Route::get('/create', 'create')->name('owner.create');
        Route::post('/store', 'store')->name('owner.store');
        Route::get('/{id}/edit', 'edit')->name('owner.edit');
        Route::put('/{id}/update', 'update')->name('owner.update');
        Route::get('/{id}/destroy', 'destroy')->name('owner.destroy');
    });

});

require __DIR__.'/auth.php';
