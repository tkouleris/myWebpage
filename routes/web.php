<?php

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
// Version 2 Routes
//Route::group(['prefix'=> 'v2'], function () {
//    Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('main.index');
//    Route::get('/blog/{page}', [\App\Http\Controllers\HomeController::class,'blog'])->name('blog.index');
//    Route::get('/tag/{tag}', [\App\Http\Controllers\HomeController::class,'tag'])->name('blog.tag');
//    Route::get('/year/{year}', [\App\Http\Controllers\HomeController::class,'year'])->name('blog.year');
//    Route::get('/archive', [\App\Http\Controllers\HomeController::class,'archive'])->name('blog.archive');
//
//    // 301 - Redirects
//    Route::get('/index.html', [\App\Http\Controllers\RedirectController::class,'index'])->name('redirect.index');
//    Route::get('/portfolio.html', [\App\Http\Controllers\RedirectController::class,'portfolio'])->name('redirect.portfolio');
//    Route::get('/cv/cv.pdf', [\App\Http\Controllers\RedirectController::class,'cv'])->name('redirect.cv');
//    Route::get('/aboutme.html', [\App\Http\Controllers\RedirectController::class,'aboutme'])->name('redirect.aboutme');
//
//    Route::post('/mail', [\App\Http\Controllers\MailController::class,'send'])->name('mail.send');
//});


Route::get('/', [\App\Http\Controllers\V3Controller::class,'index'])->name('demo.main.index');
Route::get('/about', [\App\Http\Controllers\V3Controller::class,'about'])->name('demo.main.about');
Route::get('/resume', [\App\Http\Controllers\V3Controller::class,'resume'])->name('demo.main.resume');
Route::get('/projects', [\App\Http\Controllers\V3Controller::class,'projects'])->name('demo.main.projects');
Route::get('/blog', [\App\Http\Controllers\V3Controller::class,'blog'])->name('demo.main.blog');
Route::get('/blog/{page}', [\App\Http\Controllers\V3Controller::class,'post'])->name('demo.blog.page');
Route::get('/tag/{tag}', [\App\Http\Controllers\V3Controller::class,'tag'])->name('demo.blog.tag');
Route::get('/year/{year}', [\App\Http\Controllers\V3Controller::class,'year'])->name('demo.blog.year');
Route::get('/archive', [\App\Http\Controllers\V3Controller::class,'archive'])->name('demo.blog.archive');
