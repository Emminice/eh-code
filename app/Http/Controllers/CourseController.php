<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Course;
use App\Models\Employer;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all()->groupBy('featured'); 

        return view('courses.index', [ 
            'featuredCourses' => $courses[0], 
            'courses' => $courses[1], 
            'tags' => Tag::all(), 
        ]); 

    } 


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create'); 
    }

    /**
     * Store a newly created resource in storage. 
     */
    public function store(StoreCourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
