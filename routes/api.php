<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CvController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::prefix('v1')->name('api.v1.')->group(function () {
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');

    Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
    Route::get('/companies/{id}', [CompanyController::class, 'show'])->name('companies.show');

    Route::resource('candidates', CvController::class);
    Route::resource('users', UserController::class);

    Route::resource('testimonials', TestimonialController::class);

    Route::post('/login', [UserController::class, 'apiLogin']);
    Route::post('/logout', [UserController::class, 'apiLogout'])->middleware('jwt.auth');
});

