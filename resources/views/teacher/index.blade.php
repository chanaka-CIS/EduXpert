@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="container mt-3">
            <h2>Teacher Table</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>name</th>
                  <th>address</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($teachers as $teacher)
                <tr>
                  <td>{{$teacher->name}}</td>
                  <td>{{$teacher->address}}</td>
                  <td><a class="dropdown-item" href="{{route('teacher_edit')}}">
                    <i class="fa fa-edit"></i>
                    Edit
                </a>
                <a class="dropdown-item" href="{{route('teacher_delete', $teacher->id)}}">
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
