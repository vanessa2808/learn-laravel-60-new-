@section('content')
@extends('admin.layouts.master')

@section('title', 'admin')

   <div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <section class="content-header">
            <div class="box-header with-border">
              <h3 class="box-title">List users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
    <th style="width: 10px">#</th>
    <th>Username</th>
    <th>email</th>
     <th>password</th>
    <th>Avatar</th>
    <th>Action</th>
  </tr>
   <tbody>
            @foreach ($users as $users)
              <tr>
                <td>{{$users->id}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->password}}</td>
                      <td><img src="admin/uploads/users/{{$users->avatar}}"  width="100px"></td>
                <td>
                  <a href="/admin/users/edit_users/{{$users->id}}" class="btn btn-primary">Edit</a>
                  
                </td>
                <td>
                  <a href="/admin/users/delete_users/{{$users->id}}" class="btn btn-warning">Delete</a>
                  
                </td>
              </tr>
            @endforeach
          </tbody>
</table>
</div>
</section>
</div>
@endsection
