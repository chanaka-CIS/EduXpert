<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Result;
use App\Subject;
use Illuminate\Http\Request;
use App\User;


class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::leftJoin('users', 'results.user_id', '=', 'users.id')
                            ->leftJoin('subjects', 'results.sub_id', '=', 'subjects.id')
                            ->select('results.id as id', 'users.name as name', 'users.id as user_id', 'subjects.sub_name as sub_name', 'results.marks as marks')
                            ->get();
        return view('results.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = User::where('user_type', '=', 'student')->get();
        $classes = Classroom::all();
        $subjects = Subject::all();
        return view('results.create', compact('students','classes', 'subjects'));
    }

    public function studentIndex()
    {
        $total = 0;
        $user_id = auth()->user()->id;
        $results = Result::leftJoin('subjects', 'results.sub_id', '=', 'subjects.id')
                        ->where('results.user_id', $user_id)->select('subjects.sub_name as name', 'results.marks as marks')->get();
        for ($i=0;$i<count($results);$i++){
            $total = $total + $results[$i]['marks'];
        }

        $average = round($total/count($results),2);
        return view('student_dashboard.result.index', compact('results', 'average', 'total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = new Result();
        $result->sub_id = $request->input('subName');
        $result->class_id = $request->input('className');
        $result->user_id = $request->input('StudentName');
        $result->marks = $request->input('marks');
        $result->save();

        return redirect('result_create')->with('status', 'teacher Added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
