<?php

namespace App\Http\Controllers\Ru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(Request $request){
    	return view('front.ru.index', compact('request'));
    }

    public function job(){
        return view('front.ru.job');
    }

    public function courses(){
        return view('front.ru.courses');
    }

    public function fullstack(){
        return view('front.ru.courses.fullstack');
    }

    public function data_science(){
        return view('front.ru.courses.data');
    }

    public function software_engineering(){
        return view('front.ru.courses.software');
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
