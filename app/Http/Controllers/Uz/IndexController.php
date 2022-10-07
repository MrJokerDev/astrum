<?php

namespace App\Http\Controllers\Uz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
    	return view('front.uz.index', compact('request'));
    }

    public function job(){
        return view('front.uz.job');
    }

    public function courses(){
        return view('front.uz.courses');
    }

    public function fullstack(){
        return view('front.uz.courses.fullstack');
    }

    public function data_science(){
        return view('front.uz.courses.data');
    }

    public function software_engineering(){
        return view('front.uz.courses.software');
    }

    public function gallery(){
        return view('front.uz.gallery');
    }

    public function about_us(){
        return view('front.uz.about_us');
    }

    public function news(){
        return view('front.uz.news');
    }

    public function news_pages(){
        return view('front.uz.news_pages');
    }

}
