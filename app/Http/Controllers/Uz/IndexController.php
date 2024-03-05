<?php

namespace App\Http\Controllers\Uz;

use App\Http\Controllers\Controller;
use App\Models\Course_logo;
use App\Models\Courses;
use App\Models\Lang;
use App\Models\Mentor;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
    	return view('front.uz.index', compact('courses'));
    }

//    public function course($lang, $course)
//    {
//        dd($lang);
//        $course = Courses::where('lang', $lang)->where('url', $course)->firstOrFail();
//
//
//        return view('front.' . $lang . '.index', compact('course'));
//    }

    public function courses(){
        return view('front.uz.courses');
    }

    public function backend(){
        $course = Courses::where('url', 'backend')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'uz')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.uz.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function frontend(){
        $course = Courses::where('url', 'frontend')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'uz')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.uz.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function csharp(){
        $course = Courses::where('url', 'csharp')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'uz')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.uz.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function python(){
        $course = Courses::where('url', 'python')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'uz')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.uz.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function nodejs(){
        $course = Courses::where('url', 'nodejs')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'uz')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.uz.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }

    public function cybersecurity(){
//        $course = Courses::where('url', 'cybersecurity')->first();
//        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'uz')->get();
//        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.cybersecurity.index');
    }

    public function dmax(){
        $course = Courses::where('url', '3dmax')->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('lang', 'uz')->get();
        $logos = Course_logo::where('course_id', $course->id)->get();
        return view('front.uz.courses.backend', compact('course', 'mentor_texts', 'logos'));
    }




    public function gallery(){
        return view('front.uz.gallery');
    }

    public function about_us(){
         $mentors = Mentor::all();
        return view('front.uz.about_us', compact('mentors'));
    }

    public function news(){
        return view('front.uz.news');
    }

    public function news_pages(){
        return view('front.uz.news_pages');
    }

    public function register(){
        return view('front.uz.register');
    }

}
