@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('class_store')}}">
            @csrf
            <div class="card-header">
              <h3 class="card-title">Student Add Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="teacherName">Name</label>
                  <input type="text" class="form-control" name="className" id="className" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="teacherAddress">Teacher Name</label>
                  <input type="select" class="form-control" name = "teacherName" id="teacherName" placeholder="Teacher Name">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
