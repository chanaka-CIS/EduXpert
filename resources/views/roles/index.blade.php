@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="container mt-3">
            <h2>Role Table</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>Role ID</th>
                  <th>name</th>
                  <th>User Name</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($roles as $role)
                  <td>{{$role->id}}</td>
                  <td>{{$role->name}}</td>
                  <td>{{$role->user_name}}</td>
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
