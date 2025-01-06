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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('main.index');
Route::get('/blog/{page}', [\App\Http\Controllers\HomeController::class,'blog'])->name('blog.index');
Route::get('/tag/{tag}', [\App\Http\Controllers\HomeController::class,'tag'])->name('blog.tag');
Route::get('/year/{year}', [\App\Http\Controllers\HomeController::class,'year'])->name('blog.year');
Route::get('/archive', [\App\Http\Controllers\HomeController::class,'archive'])->name('blog.archive');

// 301 - Redirects
Route::get('/index.html', [\App\Http\Controllers\RedirectController::class,'index'])->name('redirect.index');
Route::get('/portfolio.html', [\App\Http\Controllers\RedirectController::class,'portfolio'])->name('redirect.index');
Route::get('/cv/cv.pdf', [\App\Http\Controllers\RedirectController::class,'cv'])->name('redirect.index');

Route::post('/mail', [\App\Http\Controllers\MailController::class,'send'])->name('mail.send');
