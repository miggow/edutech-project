<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function getUser()
    {
        $users=User::all();
        return view('admin.user.index', compact('users'));

    }
    public function createUser(){
        return view('admin.user.create');
    }
}
