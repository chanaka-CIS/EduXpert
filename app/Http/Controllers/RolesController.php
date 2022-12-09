<?php

namespace App\Http\Controllers;

use App\Roles;
use App\User;
use Illuminate\Http\Request;
use Whoops\Run;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Roles::join('users', 'roles.user_id', '=', 'users.id')->select('roles.id as id', 'roles.name as name', 'users.name as user_name')->get();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('roles.create',  compact('users'));
    }

    public function userIndex()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Roles::where('user_id', $request->input('userId'))->pluck('user_id')->first();

        if ($validation != null) {
            return redirect('role_create')->with('status', 'User ID not Exists');
        }

        if ( $request->input('roleName') == 1) {
            $role_type = 'Admin';
        } else if ($request->input('roleName') == 2) {
            $role_type = 'Student';
        } else if ($request->input('roleName') == 3) {
            $role_type = 'Teacher';
        } else {
            $role_type = 'Parent';
        }
        $roles = new Roles();
        $roles->name = $role_type;
        $roles->user_id = $request->input('userId');
        $roles->save();

        return redirect('role_list')->with('status', 'teacher Added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = Roles::find($id);
        return view('roles.edit', compact('details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roles $roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $roles)
    {
        //
    }
}
