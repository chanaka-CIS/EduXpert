@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('result_store')}}">
            @csrf
            <div class="card-header">
              <h3 class="card-title">Student results Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                    <label for="StudentName">Student Name</label>
                    <select class="form-control" style="width: 100%" name="StudentName" required>
                      @foreach($students as $student)
                          <option value="{{$student->id}}">{{$student->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="subName">Subject Name</label>
                    <select class="form-control" style="width: 100%" name="subName" required>
                      @foreach($subjects as $subject)
                          <option value="{{$subject->id}}">{{$subject->sub_name}}</option>
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
                <div class="form-group">
                    <label for="marks">Marks</label>
                    <input type="text" class="form-control" id="marks" name="marks" required>
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
