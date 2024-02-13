<?php

namespace App\Http\Controllers;

use App\Models\Course_info;
use App\Models\Course_logo;
use App\Models\Courses;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $courses = Courses::all();

        return view('dashboard', compact('courses'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required'
        ]);

        if ($request->skills !== null){
            $skillsArray = explode(',', $request->skills);

            $skillsJson = json_encode($skillsArray);

            $existingSkill = Skill::where('course_id', $request->course_id)->first();

            if ($existingSkill) {
                $existingSkills = json_decode($existingSkill->skills);
                $updatedSkills = array_merge($existingSkills, $skillsArray);

                $updatedSkills = array_unique($updatedSkills);

                $existingSkill->update(['skills' => json_encode($updatedSkills)]);
            } else {
                Skill::create([
                    'course_id' => $request->course_id,
                    'skills' => $skillsJson
                ]);
            }
        }

        if ($request->hasFile('course_logo')) {
            $originalName = $request->file('course_logo')->getClientOriginalName();

            Course_logo::create([
                'course_id' => $request->course_id,
                'course_logo' => $originalName,
            ]);

            $request->file('course_logo')->storeAs('courses/logo', $originalName, 'public');
        }

        return redirect()->route('dashboard.index')
            ->with('success','Course logo created successfully.');
    }

    public function edit($id): View
    {
        $course_log = Course_logo::where('course_id', $id)->first();
        $course_info = Course_info::where('course_id', $id)->first();

        return view('admin.info.edit', compact('course_log', 'course_info'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
