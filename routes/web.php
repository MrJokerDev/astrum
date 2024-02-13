<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatagoryCourseController;
use App\Http\Controllers\CrmFormController;
use App\Http\Controllers\Eng\IndexController as EngIndexController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\Ru\IndexController as RuIndexController;
use App\Http\Controllers\Uz\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect(url('/uz'));
});

//Route::group(['prefix' => '{lang}', 'where' => ['lang' => 'uz|ru|eng']], function () {
//    Route::get('/', [IndexController::class, 'index'])->name('index');
//    Route::get('/register', [IndexController::class, 'register'])->name('register');
//    Route::get('/gallery', [IndexController::class, 'gallery'])->name('gallery');
//    Route::get('/job', [IndexController::class, 'job'])->name('job');
//    Route::get('/courses', [IndexController::class, 'courses'])->name('courses');
//
//    Route::get('/courses_in/{course}', [IndexController::class, 'course'])->name('course');
//
//    Route::get('/about_us', [IndexController::class, 'about_us'])->name('about_us');
//    Route::get('/news', [IndexController::class, 'news'])->name('news');
//    Route::get('/news_page', [IndexController::class, 'news_pages'])->name('news_page');
//});

Route::group(['prefix' => 'ru', 'as' => 'ru.'], function () {
    Route::get('/', [RuIndexController::class, 'index'])->name('index');
    Route::get('/register', [RuIndexController::class, 'register'])->name('register');
    Route::get('/gallery', [RuIndexController::class, 'gallery'])->name('gallery');
    Route::get('/job', [RuIndexController::class, 'job'])->name('job');
    Route::get('/courses', [RuIndexController::class, 'courses'])->name('courses');

    Route::get('/courses_in/backend', [RuIndexController::class, 'backend'])->name('backend');
    Route::get('/courses_in/frontend', [RuIndexController::class, 'frontend'])->name('frontend');
    Route::get('/courses_in/csharp', [RuIndexController::class, 'csharp'])->name('csharp');
    Route::get('/courses_in/cybersecurity', [RuIndexController::class, 'cybersecurity'])->name('cybersecurity');
    Route::get('/courses_in/nodejs', [RuIndexController::class, 'nodejs'])->name('nodejs');
    Route::get('/courses_in/python', [RuIndexController::class, 'python'])->name('python');
    Route::get('/courses_in/3dmax', [RuIndexController::class, 'dmax'])->name('3dmax');

    Route::get('/about_us', [RuIndexController::class, 'about_us'])->name('about_us');
    Route::get('/news', [RuIndexController::class, 'news'])->name('news');
    Route::get('/news_page', [RuIndexController::class, 'news_pages'])->name('news_pages');
});

Route::group(['prefix' => 'eng', 'as' => 'eng.'], function () {
    Route::get('/', [EngIndexController::class, 'index'])->name('index');
    Route::get('/register', [EngIndexController::class, 'register'])->name('register');
    Route::get('/gallery', [EngIndexController::class, 'gallery'])->name('gallery');
    Route::get('/job', [EngIndexController::class, 'job'])->name('job');
    Route::get('/courses', [EngIndexController::class, 'courses'])->name('courses');

    Route::get('/courses_in/backend', [EngIndexController::class, 'backend'])->name('backend');
    Route::get('/courses_in/frontend', [EngIndexController::class, 'frontend'])->name('frontend');
    Route::get('/courses_in/csharp', [EngIndexController::class, 'csharp'])->name('csharp');
    Route::get('/courses_in/cybersecurity', [EngIndexController::class, 'cybersecurity'])->name('cybersecurity');
    Route::get('/courses_in/nodejs', [EngIndexController::class, 'nodejs'])->name('nodejs');
    Route::get('/courses_in/python', [EngIndexController::class, 'python'])->name('python');
    Route::get('/courses_in/3dmax', [EngIndexController::class, 'dmax'])->name('3dmax');

    Route::get('/about_us', [EngIndexController::class, 'about_us'])->name('about_us');
    Route::get('/news', [EngIndexController::class, 'news'])->name('news');
    Route::get('/news_page', [EngIndexController::class, 'news_pages'])->name('news_pages');
});

Route::group(['prefix' => 'uz', 'as' => 'uz.'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/register', [IndexController::class, 'register'])->name('register');
    Route::get('/gallery', [IndexController::class, 'gallery'])->name('gallery');
    Route::get('/job', [IndexController::class, 'job'])->name('job');
    Route::get('/courses', [IndexController::class, 'courses'])->name('courses');

    Route::get('/courses_in/backend', [IndexController::class, 'backend'])->name('backend');
    Route::get('/courses_in/frontend', [IndexController::class, 'frontend'])->name('frontend');
    Route::get('/courses_in/csharp', [IndexController::class, 'csharp'])->name('csharp');
    Route::get('/courses_in/cybersecurity', [IndexController::class, 'cybersecurity'])->name('cybersecurity');
    Route::get('/courses_in/nodejs', [IndexController::class, 'nodejs'])->name('nodejs');
    Route::get('/courses_in/python', [IndexController::class, 'python'])->name('python');
    Route::get('/courses_in/3dmax', [IndexController::class, 'dmax'])->name('3dmax');

    Route::get('/about_us', [IndexController::class, 'about_us'])->name('about_us');
    Route::get('/news', [IndexController::class, 'news'])->name('news');
    Route::get('/news_page', [IndexController::class, 'news_pages'])->name('news_pages');
});


Route::post('/send_post', [CrmFormController::class, 'sendPost'])->name('send.notify');
Route::post('/create', [CrmFormController::class, 'createUser'])->name('create.user');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('/dashboard', AdminController::class);
    Route::resource('/courses', CatagoryCourseController::class);
    Route::resource('/mentors', MentorController::class);
});


require __DIR__ . '/auth.php';
