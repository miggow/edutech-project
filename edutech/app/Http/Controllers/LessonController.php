<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\Module;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function indexLesson($id)
    {
        $module = Module::findOrFail($id);
        $lessons = Lesson::where('module_id',$module->id)->get();
        return view('admin.lesson.index', compact('module', 'lessons'));
    }
    public function createLesson($id)
    {
        $module = Module::find($id);

        return view('admin.lesson.create', compact('module'));
    }
    public function storeLesson(Request $request)
    {
        // if ($request->video == 1) {
        //     $request->video_link = NULL;
        // } elseif ($request->video == 2) {
        //     $request->video_file = NULL;
        // }

        // $videoFile = $request->file('video_file');
        $videoLink = $request->video_link;
        // $videoFile = $request->video_file;
        // $videoExts = array('mp4');
        // $extVideo = pathinfo($videoFile, PATHINFO_EXTENSION);

        $rules = [
        'name' => 'required',
        'duration' => 'required'
        ];

        $lesson = new Lesson;
        $lesson->module_id = $request->module_id;
        $lesson->name = $request->name;
        $lesson->video_link = $request->video_link;

        $lesson->duration = $request->duration;

        // if ($request->filled('video_file')) {
        //     $videoFileName = uniqid() .'.'. $extVideo;
        //     $directory = 'assets/front/video/lesson_videos/';
        //     @mkdir($directory, 0775, true);
        //     @copy($videoFile, $directory . $videoFileName);
        // } else {
        //     $videoFileName = null;
        // }
        // $lesson->video_file = $videoFileName;


        $lesson->save();

        return redirect()->route('admin.lesson.index',$request->module_id);
    }
    public function editLesson($id)
    {
        $lesson = Lesson::find($id);
        return view('admin.lesson.edit', compact('lesson'));
    }
    public function updateLesson(Request $request, $id)
    {
        $lesson = Lesson::find($id);
        $lesson->update(['name' => $request->name, 'duration'=>$request->duration, 'video_link'=>$request->video_link]);
        return redirect()->route('admin.lesson.index',$lesson->module_id);
    }
    public function deleteLesson($id)
    {
        $lesson = Lesson::where('id',$id)->firstOrFail();
        $lesson->delete();
        return redirect()->back();
    }
}
