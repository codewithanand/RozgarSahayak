<?php

use Illuminate\Support\Facades\Route;

Auth::routes();





Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    // Route::get('/users/registrations', [App\Http\Controllers\Admin\RegistrationController::class, 'index'])->name('admin.users.registration');
    Route::get('/personal-information', [App\Http\Controllers\Admin\PersonalInformationController::class, 'index'])->name('admin.personal_information');
});







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Client\RozgarFormController::class, 'index']);
Route::post('/user/register', [App\Http\Controllers\Client\RozgarFormController::class, 'store']);


// Route::middleware(['auth'])->group(function () {
//     Route::get('/user/register', [App\Http\Controllers\Client\MultistepController::class, 'index'])->name('user.register');
//     Route::post('/user/register/step1', [App\Http\Controllers\Client\MultistepController::class, 'step1'])->name('user.register.step1');
//     Route::post('/user/register/step2', [App\Http\Controllers\Client\MultistepController::class, 'step2'])->name('user.register.step2');
//     Route::post('/user/register/step3', [App\Http\Controllers\Client\MultistepController::class, 'step3'])->name('user.register.step3');

//     Route::get('/user/register/step1/confirm/{id}', [App\Http\Controllers\Client\MultistepController::class, 'update_step1'])->name('user.register.step1');
//     Route::get('/user/register/step2/confirm/{id}', [App\Http\Controllers\Client\MultistepController::class, 'update_step2'])->name('user.register.step2');
//     Route::get('/user/register/step3/confirm/{id}', [App\Http\Controllers\Client\MultistepController::class, 'update_step3'])->name('user.register.step3');

// });


