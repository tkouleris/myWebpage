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

Route::get('/', [\App\Http\Controllers\V3Controller::class,'index'])->name('demo.main.index');
Route::get('/about', [\App\Http\Controllers\V3Controller::class,'about'])->name('demo.main.about');
Route::get('/resume', [\App\Http\Controllers\V3Controller::class,'resume'])->name('demo.main.resume');
Route::get('/projects', [\App\Http\Controllers\V3Controller::class,'projects'])->name('demo.main.projects');
Route::get('/blog', [\App\Http\Controllers\V3Controller::class,'blog'])->name('demo.main.blog');
Route::get('/blog/{page}', [\App\Http\Controllers\V3Controller::class,'post'])->name('demo.blog.page');
Route::get('/tag/{tag}', [\App\Http\Controllers\V3Controller::class,'tag'])->name('demo.blog.tag');
Route::get('/year/{year}', [\App\Http\Controllers\V3Controller::class,'year'])->name('demo.blog.year');
Route::get('/archive', [\App\Http\Controllers\V3Controller::class,'archive'])->name('demo.blog.archive');
