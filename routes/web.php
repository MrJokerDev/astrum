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
    Route::get('/register', [RuIndexController::class, 'register'])->name('register');
    Route::get('/gallery', [RuIndexController::class, 'gallery'])->name('gallery');
    Route::get('/job', [RuIndexController::class, 'job'])->name('job');
    Route::get('/courses', [RuIndexController::class, 'courses'])->name('courses');
    Route::get('/courses_in/fullstack', [RuIndexController::class, 'fullstack'])->name('fullstack');
    Route::get('/courses_in/data_science', [RuIndexController::class, 'data_science'])->name('data_science');
    Route::get('/courses_in/software_engineering', [RuIndexController::class, 'software_engineering'])->name('software_engineering');
    Route::get('/about_us', [RuIndexController::class, 'about_us'])->name('about_us');
    Route::get('/news', [RuIndexController::class, 'news'])->name('news');
    Route::get('/news_pages', [RuIndexController::class, 'news_pages'])->name('news_pages');
});

Route::group(['prefix'=>'eng','as'=>'eng.'], function(){
    Route::get('/', [EngIndexController::class, 'index'])->name('index');
    Route::get('/register', [EngIndexController::class, 'register'])->name('register');
    Route::get('/gallery', [EngIndexController::class, 'gallery'])->name('gallery');
    Route::get('/job', [EngIndexController::class, 'job'])->name('job');
    Route::get('/courses', [EngIndexController::class, 'courses'])->name('courses');
    Route::get('/courses_in/fullstack', [EngIndexController::class, 'fullstack'])->name('fullstack');
    Route::get('/courses_in/data_science', [EngIndexController::class, 'data_science'])->name('data_science');
    Route::get('/courses_in/software_engineering', [EngIndexController::class, 'software_engineering'])->name('software_engineering');
    Route::get('/about_us', [EngIndexController::class, 'about_us'])->name('about_us');
    Route::get('/news', [EngIndexController::class, 'news'])->name('news');
    Route::get('/news_pages', [EngIndexController::class, 'news_pages'])->name('news_pages');
});

Route::group(['prefix'=>'uz','as'=>'uz.'], function(){
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/register', [IndexController::class, 'register'])->name('register');
    Route::get('/gallery', [IndexController::class, 'gallery'])->name('gallery');
    Route::get('/job', [IndexController::class, 'job'])->name('job');
    Route::get('/courses', [IndexController::class, 'courses'])->name('courses');
    Route::get('/courses_in/fullstack', [IndexController::class, 'fullstack'])->name('fullstack');
    Route::get('/courses_in/data_science', [IndexController::class, 'data_science'])->name('data_science');
    Route::get('/courses_in/software_engineering', [IndexController::class, 'software_engineering'])->name('software_engineering');
    Route::get('/about_us', [IndexController::class, 'about_us'])->name('about_us');
    Route::get('/news', [IndexController::class, 'news'])->name('news');
    Route::get('/news_pages', [IndexController::class, 'news_pages'])->name('news_pages');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
