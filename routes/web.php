<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatagoryCourseController;
use App\Http\Controllers\CrmFormController;
use App\Http\Controllers\Eng\IndexController as EngIndexController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\Ru\IndexController as RuIndexController;
use App\Http\Controllers\Uz\IndexController;
use Illuminate\Support\Facades\Route;


function createLanguageRoutes($prefix, $controller)
{
    Route::group(['prefix' => $prefix, 'as' => $prefix . '.'], function () use ($controller) {
        Route::get('/', [$controller, 'index'])->name('index');
        Route::get('/register', [$controller, 'register'])->name('register');
        Route::get('/gallery', [$controller, 'gallery'])->name('gallery');
        Route::get('/job', [$controller, 'job'])->name('job');
        Route::get('/courses', [$controller, 'courses'])->name('courses');

        Route::get('/courses_in/backend', [$controller, 'backend'])->name('backend');
        Route::get('/courses_in/frontend', [$controller, 'frontend'])->name('frontend');
        Route::get('/courses_in/csharp', [$controller, 'csharp'])->name('csharp');
        Route::get('/courses_in/cybersecurity', [$controller, 'cybersecurity'])->name('cybersecurity');
        Route::get('/courses_in/nodejs', [$controller, 'nodejs'])->name('nodejs');
        Route::get('/courses_in/python', [$controller, 'python'])->name('python');
        Route::get('/courses_in/3dmax', [$controller, 'dmax'])->name('3dmax');

        Route::get('/about_us', [$controller, 'about_us'])->name('about_us');
        Route::get('/news', [$controller, 'news'])->name('news');
        Route::get('/news_page', [$controller, 'news_pages'])->name('news_pages');
    });
}


Route::get('/', function () {
    return redirect(url('/uz'));
});

Route::group(['prefix' => '', 'as' => ''], function () {
    createLanguageRoutes('uz', IndexController::class);
    createLanguageRoutes('ru', RuIndexController::class);
    createLanguageRoutes('eng', EngIndexController::class);
});


Route::post('/send_post', [CrmFormController::class, 'sendPost'])->name('send.notify');
Route::post('/create', [CrmFormController::class, 'createUser'])->name('create.user');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('/dashboard', AdminController::class);
    Route::resource('/courses', CatagoryCourseController::class);
    Route::resource('/mentors', MentorController::class);
});


require __DIR__ . '/auth.php';
