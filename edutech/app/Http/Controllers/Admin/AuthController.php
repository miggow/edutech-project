<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function register()
    {
        return view('admin.register');
    }
    public function doLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|max:50',
        ]);

        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            return redirect()->route('admin.course.index');
        }
        return redirect()->route('admin.login');

    }
    public function doRegister(Request $request)
    {
        $user =User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if($user){
            return redirect()->route('admin.login');
        }
        else{
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
