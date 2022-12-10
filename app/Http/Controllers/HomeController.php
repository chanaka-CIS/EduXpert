<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Subject;
use App\User;
use App\Attendent;
use App\Result;
use QrCode;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where('user_type', '=', 'student')->count();
        $subjects = Subject::all()->count();
        $classes = Classroom::all()->count();
        $attendents = Attendent::where('attendent', '=', 1)->count();
        $teachers = User::where('user_type', '=', 'teacher')->count();

        $attendent_precentage = round(($attendents/$users)*100, 2);
        return view('dashboard.dashboard', compact('users', 'subjects', 'teachers', 'attendent_precentage'));
    }

    public function studentHome()
    {
        $total = 0;
        $users_id = auth()->user()->id;
        $subjects = Subject::all()->count();
        $classes = Classroom::all()->count();
        $attendents = Attendent::where('attendent', '=', 1)->where('user_id', $users_id)->count();
        $marks = Result::where('user_id', $users_id)->get();
        $marks_count = Result::where('user_id', $users_id)->count();
        $attendent_precentage = round(($attendents/30)*100,2);
        for ($i=0;$i<count($marks);$i++) {
            $sub_mark = $marks[$i]['marks'];
            $total = $total + $sub_mark;
        }
        $avg = round($total/$marks_count, 2);
        $teachers = User::where('user_type', '=', 'teacher')->count();

        return view('student_dashboard.dashboard.dashboard', compact('avg', 'marks_count', 'attendent_precentage', 'subjects'));
    }

    public function teacherHome()
    {

        return view('teacher_dashboard.dashboard.dashboard');
    }

    public function parentHome()
    {

        return view('parent_dashboard.dashboard.dashboard');
    }

}
