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

Route::post('/mail', [\App\Http\Controllers\MailController::class,'send'])->name('mail.send');
