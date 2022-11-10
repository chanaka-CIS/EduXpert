@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="container mt-3">
            <h2>Class Table</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>Class Code</th>
                  <th> Class Name</th>
                  <th>Teacher Name</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($classes as $class)
                <tr>
                  <td>{{$class->id}}</td>
                  <td>{{$class->name}}</td>
                  <td>{{$class->teacher_id}}</td>
                  <td><a class="dropdown-item" href="#">
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
