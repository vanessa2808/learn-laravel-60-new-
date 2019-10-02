@section('content')
@extends('admin.layouts.master')



@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>
        USERS
      </h2>
     
 
            <!-- form start -->
                  <form class="forms-sample" action="admin/users/edit_users/{{$users->id}}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                      <label for="name">username</label>
                      <input type="text" class="form-control" id="name" placeholder="name of users " name="name" value="{{$users->name}}">
                    </div>
                  
                        <div class="form-group">
                      <label for="email">email</label>
                      <input type="email" id="email"  name="email" class="form-control" value="{{$users->email}}" >
                    </div>  
                  <div class="form-group">
                      <label for="password">password</label>
                      <input type="password" class="form-control" id="password" placeholder="password" name="password" value="{{$users->password}}">
                  </div>
                  <div class="form-group">
                      <label for="avatar">avatar</label>
                     
                      <input type="file" class="form-control" id="avatar" placeholder="avatar " name="avatar" value="">
                       <img src="admin/uploads/users/{{$users->avatar}}" height="100px">
                  </div>
                                       
                    <input type="submit" class="btn btn-success mr-2" value="Update users" name="edit_users">
                   
                  </form>
                </div>
 
</section>
<!-- /.content -->
</div>
@section('js')
  <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'email' );
    </script>
@append

<!-- /.content-wrapper -->
@endsection
