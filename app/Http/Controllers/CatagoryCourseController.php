<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lang;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CatagoryCourseController extends Controller
{

    public function index(): View
    {
        $courses = Courses::all();
        $langs = Lang::where('table_name', 'courses')->get();

        return view('admin.courses.index', compact('courses', 'langs'));
    }

    public function create(): View
    {
        return view('admin.courses.create');
    }

    public function store(Request $request): RedirectResponse
    {
        if ($request->hasFile('image')) {
            $orignalname = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('courses', $orignalname, 'public');
        }

        $existingCourse = Courses::where('title', $request->courses_title)->first();

        if (!$existingCourse) {
            $course = Courses::create([
                'title' => $request->courses_title,
                'image' => $orignalname,
                'url' => $request->url,
            ]);
        } else {
            $course = $existingCourse;
        }

        Lang::create([
            'table_info_id' => $course->id,
            'table_name' => 'courses',
            'lang' => $request->lang,
            'text_table' => $request->text
        ]);



        return redirect()->route('courses.index')
            ->with('success','Course created successfully.');
    }

    public function edit(Courses $course): View
    {
        $langs = Lang::where('table_name', 'courses')->where('table_info_id', $course->id)->get();

        return view('admin.courses.edit',compact('course', 'langs'));
    }

    public function update(Request $request, Courses $course): RedirectResponse
    {
        $course->update([
            'title' => $request->courses_title,
            'url' => $request->url,
        ]);

        foreach ($request->lang_text as $key => $lang_text){

            $lang = Lang::where('table_info_id', $course->id)->where('table_name', 'courses')->where('lang', $key)->first();

            $lang->update([
                'table_info_id' => $course->id,
                'table_name' => 'courses',
                'lang' => $key,
                'text_table' => $lang_text
            ]);
        }

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'image|mimes:jpeg,png,jpg',
            ]);

            if ($course->image) {
                Storage::disk('public')->delete('courses/' . $course->image);
            }

            $newImageName = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('courses', $newImageName, 'public');

            $course->update([
                'image' => $newImageName,
            ]);
        }

        return redirect()->route('courses.index')
            ->with('success','Course updated successfully');
    }

    public function destroy(Courses $course): RedirectResponse
    {
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success','Course deleted successfully');
    }
}
