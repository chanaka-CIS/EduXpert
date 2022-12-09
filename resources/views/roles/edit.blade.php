@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('role_update')}}">
            @csrf
            <div class="card-header">
              <h3 class="card-title">Role Add Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="roleName">Name</label>
                  <input value="{{$details['name']}}" type="text" class="form-control" name="teacherName" id="teacherName" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="teacherAddress">Assign User</label>
                  <select class="form-control" style="width: 100%" name="userId">
                    @foreach($details as $detail)
                        <option value="{{$detail->id}}">{{$detail->name}}</option>
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
