@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="container mt-3">
            <h2>Result Table</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Student Index Number</th>
                  <th>Sub name</th>
                  <th>Marks</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($results as $result)
                <tr>
                  <td>{{$result->id}}</td>
                  <td>{{$result->name}}</td>
                  <td>{{$result->user_id}}</td>
                  <td>{{$result->sub_name}}</td>
                  <td>{{$result->marks}}</td>
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
