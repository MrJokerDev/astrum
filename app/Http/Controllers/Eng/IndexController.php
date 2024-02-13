<?php

namespace App\Http\Controllers\Eng;

use App\Http\Controllers\Controller;
use App\Models\Course_logo;
use App\Models\Courses;
use App\Models\Lang;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	return view('front.eng.index');
    }

    public function job(){
        return view('front.eng.job');
    }

    public function courses(){
        return view('front.eng.courses');
    }

    public function backend(){
        $course = Courses::where('url', 'backend')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'eng')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.eng.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function frontend(){
        $course = Courses::where('url', 'frontend')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'eng')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.eng.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function csharp(){
        $course = Courses::where('url', 'csharp')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'eng')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.eng.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function python(){
        $course = Courses::where('url', 'python')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'eng')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.eng.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function nodejs(){
        $course = Courses::where('url', 'nodejs')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'eng')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.eng.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function cybersecurity(){
        return view('front.cybersecurity.index');
    }

    public function dmax(){
        $course = Courses::where('url', '3dmax')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'eng')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.eng.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function gallery(){
        return view('front.eng.gallery');
    }

    public function about_us(){
        return view('front.eng.about_us');
    }

    public function news(){
        return view('front.eng.news');
    }

    public function news_pages(){
        return view('front.eng.news_pages');
    }

    public function register(){
        return view('front.eng.register');
    }
}
