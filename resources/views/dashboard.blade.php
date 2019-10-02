  
@extends('admin.layouts.master')

@section('title', 'admin')

@section('content')

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
@include('admin.users.list_users')
  <!-- Main content -->
  
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection