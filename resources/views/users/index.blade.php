@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="container mt-3">
            <h2>Role Table</h2>
            <button><a href="{{route('user_create')}}">Add user</a></button>
            <table class="table">
              <thead>
                <tr>
                  <th>user Id</th>
                  <th>name</th>
                  <th>address</th>
                  <th>added date</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at}}</td>
                  <td><a class="dropdown-item" href="role_edit_user">
                    <i class="fa fa-edit"></i>
                    Edit
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-edit"></i>
                    delete
                </a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
</div>
</div>
@endsection
