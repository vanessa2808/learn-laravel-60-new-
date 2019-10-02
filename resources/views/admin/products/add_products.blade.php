@section('content')
@extends('admin.layouts.master')




@section('title', 'admin')



   <div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Add products</h1>
   <form  action="admin/products/add_products" method="POST" enctype="multipart/form-data">
    @csrf
    
        <div class="form-group">
          <label for="exampleInputEmail1">Product Name: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name"  name="name">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Product image: </label>
          <input type="file" class="form-control" id="exampleInputName" placeholder="Enter image"  name="image">
          
        </div>
        <div class="form-group">
          <label for="description">Description: </label>
          <textarea type="text" class="form-control" id="description" placeholder="Enter description" name="description"></textarea>
         
        </div>
         <div class="form-group">
          <label for="exampleInputEmail1">price: </label>
          <input type="text" class="form-control" id="exampleInputName" placeholder="Enter price"  name="price">
          
        </div>
        
       
        <!-- radio -->
          
          <button type="submit" class="btn btn-primary" name="add_products">add product</button>
  
      <!-- /.box-body -->


    </form>
</section>
</div>
  <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>

     
  @endsection

  