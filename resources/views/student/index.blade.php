@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="container mt-3">
            <h2>Student Table</h2>
            <table class="table">
              <thead>
                <tr>
                    <th>Index Number</th>
                  <th>name</th>
                  <th>address</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($students as $student)
                <tr>
                  <td>{{$student->id}}</td>
                  <td>{{$student->name}}</td>
                  <td>{{$student->address}}</td>
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
