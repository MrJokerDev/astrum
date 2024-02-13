<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lang;
use App\Models\Mentor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class MentorController extends Controller
{
    public function index(): View
    {
        $mentors = Mentor::all();

        $courses = [];

        foreach ($mentors as $mentor) {
            $course = Courses::where('id', $mentor->course_id)->first();

            if ($course) {
                $courses[] = $course;
            }
        }

        return view('admin.mentors.index', compact('mentors', 'courses'));
    }

    public function create(): View
    {
        $courses = Courses::all();

        return view('admin.mentors.create', compact('courses'));
    }

    public function store(Request $request): RedirectResponse
    {
        if ($request->hasFile('mentor_image') || $request->hasFile('mentor_logo')) {
            $mentorImage = $request->file('mentor_image')->getClientOriginalName();
            $mentorLogo = $request->file('mentor_logo')->getClientOriginalName();

            $request->file('mentor_image')->storeAs('mentors/', $mentorImage, 'public');
            $request->file('mentor_logo')->storeAs('mentors/logo/', $mentorLogo, 'public');
        }

        $existingCourse = Mentor::where('last_name', $request->last_name)->first();

        if (!$existingCourse) {
            $mentor = Mentor::create([
                'course_id' => $request->course_id,
                'image' => $mentorImage,
                'logo' => $mentorLogo,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
            ]);
        } else {
            $mentor = $existingCourse;
        }

        Lang::create([
            'table_info_id' => $mentor->id,
            'table_name' => 'mentors',
            'lang' => $request->lang,
            'text_table' => $request->mentor_text
        ]);



        return redirect()->route('mentors.index')->with('success','Mentor created successfully.');
    }


    public function edit(Mentor $mentor): View
    {
        $courses = Courses::all();
        $mentor = Mentor::where('id', $mentor->id)->first();
        $mentor_texts = Lang::where('table_name', 'mentors')->where('table_info_id', $mentor->id)->get();

        return view('admin.mentors.edit',compact('mentor', 'courses', 'mentor_texts'));
    }

    public function update(Request $request, Mentor $mentor): RedirectResponse
    {
        $mentor->update([
            'course_id' => $request->course_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);

        foreach ($request->lang_text as $key => $lang_text){

            $lang = Lang::where('table_info_id', $mentor->id)->where('table_name', 'mentors')->where('lang', $key)->first();

            $lang->update([
                'table_info_id' => $mentor->id,
                'table_name' => 'mentors',
                'lang' => $key,
                'text_table' => $lang_text
            ]);
        }

        if ($request->hasFile('mentor_image') || $request->hasFile('mentor_logo')) {
            $request->validate([
                'file' => 'image|mimes:jpeg,png,jpg',
            ]);

            if ($mentor->mentor_image) {
                Storage::disk('public')->delete('mentors/' . $mentor->mentor_image);
            }elseif ($mentor->mentor_logo){
                Storage::disk('public')->delete('mentors/logo' . $mentor->mentor_logo);
            }

            $mentorImage = $request->file('mentor_image')->getClientOriginalName();
            $request->file('mentor_image')->storeAs('mentors', $mentorImage, 'public');
            $mentorLogo = $request->file('mentor_image')->getClientOriginalName();
            $request->file('mentor_logo')->storeAs('mentors/logo', $mentorLogo, 'public');

            $mentor->update([
                'mentor_image' => $mentorImage,
                'mentor_logo' => $mentorLogo,
            ]);
        }

        return redirect()->route('mentors.index')
            ->with('success','Course updated successfully');
    }

    public function destroy(Mentor $mentor): RedirectResponse
    {
        Storage::disk('public')->delete('mentors/' . $mentor->mentor_image);
        Storage::disk('public')->delete('mentors/logo/' . $mentor->mentor_logo);

        $mentor->delete();

        return redirect()->route('mentors.index')
            ->with('success','Mentor deleted successfully');
    }
}
