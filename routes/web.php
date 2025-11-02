<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware(['auth', 'locale'])->group(function () {
    Route::get('/{locale}/switch', [LocaleController::class, 'switch'])->name('locale');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource('services', ServiceController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('joboffers', JobOfferController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('users', UserController::class);

    Route::get('/candidates', [UserController::class, 'candidates'])->name('candidates.index');
    Route::get('/recruiters', [UserController::class, 'recruiters'])->name('recruiters.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
});

require __DIR__.'/auth.php';
