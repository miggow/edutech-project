<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // return view('admin.layout');
        return view('admin.courses.index');
    }
    public function createCourses()
    {
        return view('admin.courses.create');
    }
}
