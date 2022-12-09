@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('role_store')}}">
            @csrf
            <div class="card-header">
              <h3 class="card-title">Role Add Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                    <label for="userId">Select Role</label>
                    <select class="form-control" style="width: 100%" name="roleName">
                          <option value="1">Admin</option>
                          <option value="2">Student</option>
                          <option value="3">Teacher</option>
                          <option value="4">Parent</option>
                  </select>
                  </div>
                
                <div class="form-group">
                  <label for="userId">Assign user</label>
                  <select class="form-control" style="width: 100%" name="userId">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
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
