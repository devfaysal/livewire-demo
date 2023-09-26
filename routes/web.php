<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OnboardingController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('onboarding', [OnboardingController::class, 'index'])->name('onboarding.index');
