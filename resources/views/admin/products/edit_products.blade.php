@section('content')
@extends('admin.layouts.master')



@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>
        PRODUCTS
      </h2>
  
 
            <!-- form start -->
                  <form class="forms-sample" action="admin/products/edit_products/{{$products->id}}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                      <label for="exampleInputName1">Product Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="name of products " name="name" value="{{$products->name}}">
                    </div>
                  
                  <div class="form-group">
                      <label for="exampleInputImage1">Image</label>
                     
                      <input type="file" class="form-control" id="exampleInputImage1" placeholder="Image " name="image" value="">
                       <img src="admin/uploads/products/{{$products->image}}" height="100px">
                  </div>
                          <div class="form-group">
                      <label for="description">Description</label>
                      <textarea id="description"  name="description" class="form-control" style="height: 100px;">{{$products->description}}</textarea>
                    </div>  
                  <div class="form-group">
                      <label for="exampleInputPrice1">Price</label>
                      <input type="text" class="form-control" id="exampleInputPrice1" placeholder="price" name="price" value="{{$products->price}}">
                  </div>
                         
                                       
                    <input type="submit" class="btn btn-success mr-2" value="Update products" name="edit_products">
                   
                  </form>
                </div>
 
</section>
<!-- /.content -->
</div>

  <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>


<!-- /.content-wrapper -->
@endsection
