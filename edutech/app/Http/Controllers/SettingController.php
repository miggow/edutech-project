<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Str;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class SettingController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('be.profile.settings', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        // dd($request->all());
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);

            $user->image = 'storage/images/'.$fileName;
        }
        $user->save();
        return redirect()->back();
    }
    public function UpdateSocial(Request $request, $id)
    {
        dd($request->all());
        $user = User::find($id);

    }
}
