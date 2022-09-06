<?php

namespace App\Http\Controllers\Uz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('front.uz.index', compact('request'));
    }

    public function jobs()
    {
        return view('front.uz.jobs');
    }

    public function gallery()
    {
        return view('front.uz.gallery');
    }

    public function courses()
    {
        return view('front.uz.courses');
    }

}
