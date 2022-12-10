<?php

namespace App\Http\Controllers;

use App\Attendent;
use App\Classroom;
use App\User;
use Illuminate\Http\Request;

class AttendentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('attendent.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes  = Classroom::all();
        $students = User::where('user_type', '=', 'student')->get();

        return view('attendent.create', compact('classes', 'students'));
    }

    public function qrCodeGen()
    {
        return view('student_dashboard.QR.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new Attendent();
        $teacher->attendent = $request->input('flexRadioDefault');
        $teacher->class_id = $request->input('classId');
        $teacher->user_id = $request->input('studentId');
        $teacher->save();

        return redirect('attendent_create')->with('status', 'teacher Added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendent  $attendent
     * @return \Illuminate\Http\Response
     */
    public function show(Attendent $attendent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendent  $attendent
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendent $attendent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendent  $attendent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendent $attendent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendent  $attendent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendent $attendent)
    {
        //
    }
}
