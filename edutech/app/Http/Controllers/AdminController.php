<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\Module;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function indexCourse()
    {
        // return view('admin.layout');
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }
    public function createCourses()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.courses.create',compact('categories'));
    }
    public function storeCourse(Request $request)
    {
        // dd($request->all());
        $course = new Course();
        $course->title = $request->title;
        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $path = $request->file('thumbnail')->store('public/file');
            $url = Storage::url($path);
            $course->image = $url;
        }
        if ($request->hasFile('cover_image') && $request->file('cover_image')->isValid()) {
            $path = $request->file('cover_image')->store('public/file');
            $url = Storage::url($path);
            $course->bg = $url;
        }
        if ($request->hasFile('video') && $request->file('video')->isValid()) {
            $path = $request->file('video')->store('public/file');
            $url = Storage::url($path);
            $course->video = $url;
        }
        $course->description = $request->description;
        $course->user_id = auth()->user()->id;
        $course->duration = $request->duration;
        $course->current_price = $request->price;
        $course->category_id = $request->category;
        $course->previous_price = $request->pre_price;
        $course->save();
        return redirect()->route('admin.course.index');
    }
    public function deleteCourse($id)
    {
        $course =Course::where('id',$id)->firstOrFail();
        $course->delete();

        return redirect()->back();
    }
    public function editCourse($id)
    {
        $categories = Category::where('status', 1)->get();
        $course =Course::where('id',$id)->firstOrFail();
        return view('admin.courses.edit', compact('course','categories'));
    }
    public function updateCourse(Request $request, $id)
    {
        $course = Course::find($id);
        $course->title = $request->title;
        if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
            $path = $request->file('thumbnail')->store('public/file');
            $url = Storage::url($path);
            $course->image = $url;
        }
        if ($request->hasFile('cover_image') && $request->file('cover_image')->isValid()) {
            $path = $request->file('cover_image')->store('public/file');
            $url = Storage::url($path);
            $course->bg = $url;
        }
        if ($request->hasFile('video') && $request->file('video')->isValid()) {
            $path = $request->file('video')->store('public/file');
            $url = Storage::url($path);
            $course->video = $url;
        }
        $course->description = $request->description;
        $course->user_id = auth()->user()->id;
        $course->duration = $request->duration;
        $course->current_price = $request->price;
        $course->category_id = $request->category;
        $course->previous_price = $request->pre_price;
        $course->save();
        return redirect()->route('admin.course.index');
    }
    public function indexCategory()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.category.index', compact('categories'));
    }
    public function createCategory()
    {
        return view('admin.category.create');
    }
    public function StoreCategory(Request $request)
    {
        $category = new Category();
        $category->user_id = auth()->user()->id;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.category.index');

    }
    public function editCategory($id)
    {
        $category =  Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function updateCategory(Request $request, $id)
    {
        $category =  Category::find($id);
        $category->user_id = auth()->user()->id;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.category.index');
    }
    public function deleteCategory($id)
    {
        $category = Category::where('id',$id)->firstOrFail();
        $category->delete();
        return redirect()->route('admin.category.index');
    }
    public function indexModule($id)
    {
        $course = Course::findOrFail($id);
        $modules = Module::where('course_id',$course->id)->get();
        return view('admin.module.index', compact('course', 'modules'));
    }
    public function createModule($id)
    {
        $course = Course::find($id);

        return view('admin.module.create', compact('course'));
    }
    public function storeModule(Request $request)
    {
        $rules = [
            'name' => 'required',
            'duration' => 'required'
        ];

        // $validator = Validator::make($request->all(), $rules);
        // if ($validator->fails()) {
        //     $errmsgs = $validator->getMessageBag()->add('error', 'true');
        //     return response()->json($validator->errors());
        // }
        $module = new Module();
        $module->course_id = $request->course_id;
        $module->name = $request->name;
        $module->duration = $request->duration;
        $module->save();

        return redirect()->route('admin.module.index',$request->course_id );
    }
    public function editModule($id)
    {
        $module = Module::find($id);
        return view('admin.module.edit', compact('module'));
    }
    public function updateModule(Request $request, $id)
    {
        $module = Module::find($id);
        $module->update(['name' => $request->name, 'duration'=>$request->duration]);
        return redirect()->route('admin.module.index', $module->course_id);
    }
    public function deleteModule($id)
    {
        $module = Module::where('id',$id)->firstOrFail();
        $module->delete();
        return redirect()->back();
    }
}
