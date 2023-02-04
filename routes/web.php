<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\About\SkillController;
use App\Http\Controllers\HeaderhomeController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\About\EducationController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        // frontend

        // Route::prefix('/')->group(function (){
        // });

        Route::get('', [HomeController::class,'index']);
        Route::get('/about', [HomeController::class,'about']);

        // dashboard

        Route::middleware(['auth', 'verified','goToDashboard'])->group(function () {
            Route::get('/dashboard', function () {
                return view('dashboard');
            });

            Route::prefix('dashboard')->group(function(){
                Route::resource('user' , UserController::class); // users

                Route::resource('headerhome' , HeaderhomeController::class); // header home

                // about
                Route::prefix('about')->group(function(){

                    Route::resource('about' , AboutController::class); // about
                    Route::resource('skill' , SkillController::class); // skills
                    Route::resource('education' , EducationController::class); // education

                });
            });

        });


        // Route::prefix('/')->group(function(){
        // });

        // Route::middleware('auth')->group(function () {
        //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        // });
        require __DIR__ . '/auth.php';
    }
);

