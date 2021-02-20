<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
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

/* Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
        ],
        function () {
            Route::get('/', [SiteController::class, 'index'])->name('home');
        }
    );*/

Route::get('/', [SiteController::class, 'index'])->name('home');

Route::get('/a-propos-de-nous', [SiteController::class, 'about'])->name('about');

Route::get('/nos-services', [SiteController::class, 'services'])->name('services');

Route::get('/nos-projets', [SiteController::class, 'portfolio'])->name('portfolio');
Route::get('/nos-projets/{project}', [SiteController::class, 'singlePortfolio'])->name('portfolio.single');

Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/blog/{post}', [SiteController::class, 'singleBlog'])
    ->middleware(ProtectAgainstSpam::class)
    ->name('blog.single');

Route::get('/tags', [SiteController::class, 'tags'])->name('tags');
Route::get('/tags/{tag}', [SiteController::class, 'singleTag'])->name('tags.single');

Route::get('/contactez-nous', [ContactController::class, 'index'])->name('contact');

Route::feeds();

Route::group(['prefix' => 'theadmin'], function () {
    Voyager::routes();

    // Route::redirect('theadmin/lang', 'theadmin/languages')->name('llng');
});
