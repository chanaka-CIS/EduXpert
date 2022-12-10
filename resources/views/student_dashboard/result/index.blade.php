@extends('student_dashboard.layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="container mt-3">
            <h2>Result Table</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>Subject Name</th>
                  <th>Marks</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($results as $result)
                <tr>
                  <td>{{$result->name}}</td>
                  <td>{{$result->marks}}</td>
                </tr>
                @endforeach
                <tfoot>
                    <tr>
                        <td >Total</td>
                        <td >{{$total}}</td>
                    </tr>
                    <tr>
                        <td>Average</td>
                        <td>{{$average}}</td>
                    </tr>
                </tfoot>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="container mt-3">
                <a class="btn btn-danger btn-lg btn-block" href="{{route('pdf-create')}}" role="button">Generate Report</a>
              </div>
            </div>
          </div>
    </div>
</div>
</div>
@endsection
