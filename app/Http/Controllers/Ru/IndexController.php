<?php

namespace App\Http\Controllers\Ru;

use App\Http\Controllers\Controller;
use App\Models\Course_logo;
use App\Models\Courses;
use App\Models\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function index(){

        return view('front.ru.index');
    }

    public function job(){
        return view('front.ru.job');
    }

    public function courses(){
        return view('front.ru.courses');
    }

    public function backend(){
        $course = Courses::where('url', 'backend')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'ru')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.ru.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function frontend(){
        $course = Courses::where('url', 'frontend')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'ru')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.ru.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function csharp(){
        $course = Courses::where('url', 'csharp')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'ru')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.ru.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function python(){
        $course = Courses::where('url', 'python')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'ru')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.ru.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function nodejs(){
        $course = Courses::where('url', 'nodejs')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'ru')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.ru.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function cybersecurity(){
        return view('front.cybersecurity.index');
    }

    public function dmax(){
        $course = Courses::where('url', '3dmax')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'ru')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.ru.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function gallery(){
        return view('front.ru.gallery');
    }

    public function about_us(){
        return view('front.ru.about_us');
    }

    public function news(){
        return view('front.ru.news');
    }

    public function news_pages(){
        return view('front.ru.news_pages');
    }
    public function register(){
        return view('front.ru.register');
    }
}
