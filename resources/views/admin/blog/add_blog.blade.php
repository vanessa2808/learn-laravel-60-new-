@section('content')
@extends('admin.layouts.master')

@section('title', 'admin')



   <div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Add blog </h1>
  <form action="admin/blog/add_blog" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
          <label for="exampleInputEmail1"> title: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter title"  name="title">
          
        </div>
         <div class="form-group">
          <label for="exampleInputEmail1">blog image: </label>
          <input type="file" class="form-control" id="exampleInputName" placeholder="Enter image"  name="image">
          
        </div>
         <div class="form-group">
          <label for="detail">detail: </label>
          <textarea type="text" class="form-control" id="detail" placeholder="Enter detail" name="detail"></textarea>
         
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">author: </label>
          <input type="author" class="form-control" id="exampleInputName" placeholder="Enter author"  name="author">
          
        </div>
        <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'detail' );
    </script>
          
          <button type="submit" class="btn btn-primary" name="add_blog">add blog</button>
  
      <!-- /.box-body -->
 
     

    </form>
</section>
</div>
  @endsection

  