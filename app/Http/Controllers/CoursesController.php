<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\updateCourseRequest;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', ['courses' => $courses]);
    }

    public function store(StoreCourseRequest $request)
    {
        Course::create([
            'name' => $request->name,
            'active' => $request->active,
        ]);
        return redirect()
            ->route('courses.index')
            ->with('success', 'Course created successfully');
    }

    public function create()
    {
        return view('courses.create');

    }

    public function edit(Course $course)
    {
//        $course = Course::find($id);
//        if ($course) {
//            return view('courses.edit', ['course' => $course]);
//        } else {
//            return redirect()
//                ->route('courses.index')
//                ->with('error', 'Course not found');
        return view('courses.edit', ['course' => $course]);
    }

    public function update(updateCourseRequest $request, $id)
    {
        $data = Course::find($id);
        if ($data) {
            $data->update([
                'name' => $request->name,
                'active' => $request->active,
            ]);
        } else {
            return redirect()->route('courses.edit')->with('error', 'Course not found');
        }
        return redirect()
            ->route('courses.index')
            ->with('success', 'Course updated successfully');
    }

    public function destroy($id)
    {
        $data = Course::find($id);
        $data->delete();
        return redirect()
            ->back()
            ->with('success', 'Course deleted successfully');
    }
}
