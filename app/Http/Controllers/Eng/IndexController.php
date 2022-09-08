<?php

namespace App\Http\Controllers\Eng;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
    	return view('front.eng.index', compact('request'));
    }

    public function job(){
        return view('front.eng.job');
    }

    public function courses(){
        return view('front.eng.courses');
    }

    public function courses_in(){
        return view('front.eng.courses_in');
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
}
