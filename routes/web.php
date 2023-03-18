<?php

use App\Models\TitleSection;
// use App\Settings\SettingsFacade;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Portfolio\Portfolioconfig;
use App\Http\Controllers\HeaderhomeController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\About\SkillController;
use App\Http\Controllers\Service\TestController;
use App\Http\Controllers\TitleSectionController;
use App\Http\Controllers\Setting\SocialController;
use App\Http\Controllers\About\EducationController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Partner\PartnerController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Setting\SettingController;
use App\Models\WorkingProcess\WorkingProcessconfig;
use App\Http\Controllers\Portfolio\FilterController;
use App\Http\Controllers\Portfolio\PortfolioController;
use App\Http\Controllers\Service\ServicesListController;
use App\Http\Controllers\Service\ServiceConfigController;
use App\Http\Controllers\Contact\ContactMessageController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Portfolio\PortfolioConfigController;
use App\Http\Controllers\WorkingProcess\WorkingProcessController;
use App\Http\Controllers\WorkingProcess\WorkingProcessconfigController;

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

        Route::get('/', [HomeController::class,'index']);
        Route::get('/about', [HomeController::class,'about']);
        Route::get('/services', [HomeController::class,'services']);
        Route::get('/services-details', [HomeController::class,'servicesDetails'])->name('services-details');
        Route::get('/contact', [HomeController::class,'contact']);

        // dashboard

        Route::middleware(['auth', 'verified','goToDashboard'])->group(function () {
            Route::get('/dashboard', function () {
                return view('dashboard');
            });

            Route::prefix('dashboard')->group(function(){
                Route::resource('user' , UserController::class); // users

                Route::resource('headerhome' , HeaderhomeController::class); // header home

                // setting and social
                Route::resource('setting' , SettingController::class);
                Route::resource('social' , SocialController::class);

                // about
                Route::prefix('about')->group(function(){

                    Route::resource('about' , AboutController::class); // about
                    Route::resource('skill' , SkillController::class); // skills
                    Route::resource('education' , EducationController::class); // education

                });

                // service
                Route::prefix('service')->group(function(){
                    Route::resource('serviceconfig' , ServiceConfigController::class); // service
                    Route::resource('service' , ServiceController::class); // service
                    Route::resource('servicelist' , ServicesListController::class); // ServicesListController
                    Route::get('/showlist/{id?}' , [ServicesListController::class, 'showlist'])->name('showlist');
                });

                // WorkingProcess
                Route::prefix('workingProcess')->group(function(){
                    Route::resource('workingProcessconfig' , WorkingProcessconfigController::class); // WorkingProcess
                    Route::resource('workingProcess' , WorkingProcessController::class); // WorkingProcess
                });

                // title section
                // Route::resource('titleSection' , TitleSectionController::class); // title section

                // portfolio
                Route::prefix('portfolio')->group(function(){
                    Route::resource('portfolioconfig' , PortfolioConfigController::class); // portfolio
                    Route::resource('portfolio' , PortfolioController::class); // portfolio
                    Route::resource('filter' , FilterController::class); // portfolio
                });

                // partners
                Route::resource('partner' , PartnerController::class); // partners

                // contact
                Route::resource('contact' , ContactController::class); // contact
                Route::resource('contactMessage' , ContactMessageController::class); // contact

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

