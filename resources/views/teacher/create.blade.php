@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('teacher_store')}}">
            @csrf
            <div class="card-header">
              <h3 class="card-title">Teacher Add Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="teacherName">Name</label>
                  <input type="text" class="form-control" name="teacherName" id="teacherName" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="teacherAddress">Address</label>
                  <input type="text" class="form-control" name = "teacherAddress" id="teacherAddress" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="teacherBOD">Birth of date</label>
                    <input type="text" class="form-control" id="teacherBOD" placeholder="Enter BOD">
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
