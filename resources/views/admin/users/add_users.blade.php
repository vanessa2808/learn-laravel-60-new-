@section('content')
@extends('admin.layouts.master')

@section('title', 'admin')



   <div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Add users </h1>
  <form action="admin/users/add_users" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
          <label for="exampleInputEmail1"> username: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="name">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email: </label>
          <input type="email" class="form-control" id="exampleInputName" placeholder="Enter email"  name="email">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">password: </label>
          <input type="password" class="form-control" id="exampleInputName" placeholder="Enter password"  name="password"required autocomplete="current-password">
          
        </div>
        

          <div class="form-group">
          <label for="exampleInputEmail1">Retype password: </label>
          <input type="password" class="form-control" id="exampleInputName" placeholder="retype password"  name="retypePassword">
          
        </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Product avatar: </label>
          <input type="file" class="form-control" id="exampleInputName" placeholder="Enter avatar"  name="avatar">
          
        </div>
       <!--  <div class="form-group">
          <label for="exampleInputEmail1">Date of birth: </label>
          <input  type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter date " name="date ">
         
        </div> -->
         


       
       
        <!-- radio -->
          
          <button type="submit" class="btn btn-primary" name="add_users">add users</button>
  
      <!-- /.box-body -->
 
     

    </form>
</section>
</div>
  @endsection

  