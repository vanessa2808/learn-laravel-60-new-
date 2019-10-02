@section('content')
@extends('admin.layouts.master')

@section('title', 'admin')

   <div class="content-wrapper" >

  <!-- Content Header (Page header) -->
  <section class="content-header">

            <div class="box-header with-border">
              <h3 class="box-title">List blog</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
    <th style="width: 10px">#</th>
    <th>title</th>
    <th>Image</th>
    <th>Detail</th>
    <th>author</th>
    
    <th>Action</th>
  </tr>
      
 <tbody>
            @foreach ($blog as $blog)
              <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->title}}</td>
                <td><img src="admin/uploads/blog/{{$blog->image}}" height="100px"></td>
                <td>{{$blog->detail}}</td>
                <td>{{$blog->author}}</td>
                <td>
                  <a href="/admin/blog/edit_blog/{{$blog->id}}" class="btn btn-primary">Edit</a>
                  
                </td>
                <td>
                  <a href="/admin/blog/delete_blog/{{$blog->id}}" class="btn btn-warning">Delete</a>
                  
                </td>
              </tr>
            @endforeach
          </tbody>
 
 
 </table>
</div>
</section>
</div>
@endsection
