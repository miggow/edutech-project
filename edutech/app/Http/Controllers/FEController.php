<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class FEController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('frontend.course.index', compact('courses'));
    }
    public function detailCourse($id)
    {
        $course = Course::find($id);
        return view('frontend.course.detail', compact('course'));
    }
}
