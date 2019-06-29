<?php

namespace App\Http\Controllers;
use App\Course;
use App\CourseUser;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        $courses = Course::all();
        return view('create', compact('courses'));
    
    }
    public function join(Request $request)
    {
        $course_ids = $request->get('courses');
        foreach($course_ids as $course_id){
            $course_user = new CourseUser([
                'user_id' => auth()->user()->id,
                'course_id' => $course_id
            ]);
            $course_user->save();
        };
        // return view('home', compact('courses'));
        return redirect('/courses')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }

    public function index()
    {
        $courses = Course::select('name', 'code', 'course_users.id')
            ->join('course_users', 'course_users.course_id', '=', 'courses.id')
            ->where('course_users.user_id', auth()->user()->id)
            ->get();
        return view('index', compact('courses'));
    
    }
    public function destroy($id)
    {
        $course = CourseUser::find($id);
        $course->delete();

        return redirect('/courses')->with('success', 'Course has been Dropped');
    }
}
