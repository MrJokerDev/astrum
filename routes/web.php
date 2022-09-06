<?php

use App\Http\Controllers\Eng\IndexController as EngIndexController;
use App\Http\Controllers\Ru\IndexController as RuIndexController;
use App\Http\Controllers\Uz\IndexController;
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

Route::get('/', function(){
   return redirect(url('/uz'));
});

Route::group(['prefix'=>'ru','as'=>'ru.'], function(){
    Route::get('/', [RuIndexController::class, 'index'])->name('index');
    Route::get('/gallery', [RuIndexController::class, 'gallery'])->name('gallery');
    Route::get('/jobs', [RuIndexController::class, 'jobs'])->name('jobs');
    Route::get('/courses', [RuIndexController::class, 'courses'])->name('courses');
});

Route::group(['prefix'=>'eng','as'=>'eng.'], function(){
    Route::get('/', [EngIndexController::class, 'index'])->name('index');
    Route::get('/gallery', [EngIndexController::class, 'gallery'])->name('gallery');
    Route::get('/jobs', [EngIndexController::class, 'jobs'])->name('jobs');
    Route::get('/courses', [EngIndexController::class, 'courses'])->name('courses');
});

Route::group(['prefix'=>'uz','as'=>'uz.'], function(){
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/gallery', [IndexController::class, 'gallery'])->name('gallery');
    Route::get('/jobs', [IndexController::class, 'jobs'])->name('jobs');
    Route::get('/courses', [IndexController::class, 'courses'])->name('courses');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
