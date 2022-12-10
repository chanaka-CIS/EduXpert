@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('subject_store')}}">
            @csrf
            <div class="card-header">
              <h3 class="card-title">Student results Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                    <label for="subName">Subject Name</label>
                    <input type="text" class="form-control" id="marks" name="subName" required>
                  </div>
                <div class="form-group">
                    <label for="teacherName">Teacher Name</label>
                    <select class="form-control" style="width: 100%" name="teacherName" required>
                      @foreach($teachers as $teacher)
                          <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="className">Class Name</label>
                    <select class="form-control" style="width: 100%" name="className" required>
                      @foreach($classes as $class)
                          <option value="{{$class->id}}">{{$class->name}}</option>
                      @endforeach
                    </select>
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
