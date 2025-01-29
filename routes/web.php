<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::get('/', function () {
    return redirect()->route('home');
});



Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', action: [Admin\HomeController::class, 'index'])->name('home');
    Route::resource('/departments', Admin\DepartmentController::class);
    Route::resource('/users', Admin\UserController::class);
    Route::resource('/programs', Admin\ProgramsController::class);

});

Auth::routes();
