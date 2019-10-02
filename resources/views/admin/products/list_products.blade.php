@section('content')
@extends('admin.layouts.master')

@section('title', 'admin')

   <div class="content-wrapper" >

  <!-- Content Header (Page header) -->
  <section class="content-header">

            <div class="box-header with-border">
              <h3 class="box-title">List products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
    <th style="width: 10px">#</th>
    <th>ProductName</th>
    <th>Image</th>
    <th>Price</th>
    <th>Description</th>
    
    <th>Action</th>
  </tr>
      
 <tbody>
            @foreach ($products as $products)
              <tr>
                <td>{{$products->id}}</td>
                <td>{{$products->name}}</td>
                <td><img src="admin/uploads/products/{{$products->image}}" height="100px"></td>
                <td>{{$products->price}}</td>
                <td>{{$products->description}}</td>
                <td>
                  <a href="/admin/products/edit_products/{{$products->id}}" class="btn btn-primary">Edit</a>
                  
                </td>
                <td>
                  <a href="/admin/products/delete_products/{{$products->id}}" class="btn btn-warning">Delete</a>
                  
                </td>
              </tr>
            @endforeach
          </tbody>
 
 
 </table>
</div>
</section>
</div>
@endsection
