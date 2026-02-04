<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
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


}
