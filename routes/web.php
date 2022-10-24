<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FrontendController;
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
// Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [FrontendController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth'])->name('dashboard');

// Route::group(['middleware' => 'auth'], function() {
    // Route::get('/dashboard', function () {
    //     return view('admin.index');
    // })->name('dashboard');

    Route::group(['prefix' => 'dashboard'], function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });
    Route::group(['prefix' => 'profile'], function() {
        Route::get('/', function(){
            return view('admin.profile');
        })->name('profile');
        Route::put('/update', [ProfileController::class, 'update'])->name('update');
    });
    Route::group(['prefix' => 'services'], function() {
        Route::get('/', function(){
            return view('admin.services');
        });
        Route::get('/show', [ServiceController::class, 'show']);
        Route::post('/store', [ServiceController::class, 'store'])->name('store');
        Route::delete('/delete', [ServiceController::class, 'delete'])->name('delete');
    });
    Route::group(['prefix' => 'portfolio'], function() {
        Route::get('/', function(){
            return view('admin.portfolio');
        });
        Route::get('/show', [PortfolioController::class, 'show']);
        Route::post('/store', [PortfolioController::class, 'store'])->name('portfolio.store');
        Route::get('/delete/{id_portolio}', [PortfolioController::class, 'delete'])->name('portfolio.delete');
    });
    
    Route::group(['prefix' => 'experiences'], function() {
        Route::get('/', function(){
            return view('admin.experience');
        });
        Route::get('/show', [ExperienceController::class, 'show']);
        Route::post('/store', [ExperienceController::class, 'store'])->name('experiences.store');
        Route::get('/delete/{id_experience}', [ExperienceController::class, 'delete'])->name('experiences.delete');
    });

    Route::group(['prefix' => 'education'], function() {
        Route::get('/', function(){
            return view('admin.education');
        });
        Route::get('/show', [EducationController::class, 'show']);
        Route::post('/store', [EducationController::class, 'store'])->name('education.store');
        Route::get('/delete/{id_experience}', [EducationController::class, 'delete'])->name('education.delete');
    });

    Route::group(['prefix' => 'testimonial'], function() {
        Route::get('/', function(){
            return view('admin.testimonial');
        });
        Route::get('/show', [TestimonialController::class, 'show']);
        Route::post('/store', [TestimonialController::class, 'store'])->name('testimonial.store');
        Route::put('/update', [TestimonialController::class, 'store'])->name('testimonial.update');
        Route::get('/detail/{id_testimonial}', [TestimonialController::class, 'detail'])->name('testimonial.detail');
        Route::get('/delete/{id_testimonial}', [TestimonialController::class, 'delete'])->name('testimonial.delete');
    });
    
    Route::get('/messages', [MessageController::class, 'index'])->name('messages');
// });


require __DIR__.'/auth.php';
