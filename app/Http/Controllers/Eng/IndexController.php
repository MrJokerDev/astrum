<?php

namespace App\Http\Controllers\Eng;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('front.eng.index', compact('request'));
    }

    public function gallery()
    {
        return view('front.eng.gallery');
    }

    public function jobs()
    {
        return view('front.eng.jobs');
    }

    public function courses()
    {
        return view('front.eng.courses');
    }
}
