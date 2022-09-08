<?php

namespace App\Http\Controllers\Eng;

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

    public function courses_in(){
        return view('front.ru.courses_in');
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
}
