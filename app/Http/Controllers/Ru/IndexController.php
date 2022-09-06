<?php

namespace App\Http\Controllers\Ru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('front.ru.index', compact('request'));
    }

    public function gallery()
    {
        return view('front.ru.gallery');
    }

    public function jobs()
    {
        return view('front.ru.jobs');
    }

    public function courses()
    {
        return view('front.ru.courses');
    }
}
