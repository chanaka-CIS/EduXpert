@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('attendent_store')}}">
            @csrf
            <div class="card-header">
              <h3 class="card-title">Student Attendent</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="studentId">Student Name</label>
                  <select class="form-control" style="width: 100%" name="studentId">
                    @foreach($students as $student)
                        <option value="{{$student->id}}">{{$student->name}} - index NO :{{$student->id}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="classId">Class Name</label>
                    <select class="form-control" style="width: 100%" name="classId">
                      @foreach($classes as $class)
                          <option value="{{$class->id}}">{{$class->name}}</option>
                      @endforeach
                      </select>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Present
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Absent
                    </label>
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
