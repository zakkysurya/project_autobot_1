<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('web.index');
});

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth'])->name('dashboard');

// Route::group(['middleware' => 'auth'], function() {
    // Route::get('/dashboard', function () {
    //     return view('admin.index');
    // })->name('dashboard');

    Route::group(['prefix' => 'dashboard'], function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Route::get('/detail/info', [DashboardController::class, 'index']);
    });
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
// });


require __DIR__.'/auth.php';
