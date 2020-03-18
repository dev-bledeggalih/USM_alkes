@extends('layouts.adminLayout.admin_design')
@section('content')

<?php 
use App\Http\Controllers\Controller;

  $newItemAttr = Controller::newItemAttr();

 ?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">View Products</a> </div>
    <h1>Products</h1>
    @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif   
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Products</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>New Product</th>
                  <th>Category ID</th>
                  <th>Brand ID</th>
                  <th>Category Name</th>
                  <th>Product Name</th>
                  <th>Product Code</th>
                  <th>Product Color</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Feature Item</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($products as $product)
                <tr class="gradeX">
                  <td class="center">{{ $product->id }}</td>
                  @if($product->created_at >= date('Y-m-d H:i:s',strtotime('-1 days')))
                    <td class="center">New</td>
                  @else
                    <td class="center"></td>
                  @endif
                  <td class="center">{{ $product->category_id }}</td>
                  <td class="center">{{ $product->brand_id }}</td>
                  <td class="center">{{ $product->category_name }}</td>
                  <td class="center">{{ $product->product_name }}</td>
                  <td class="center">{{ $product->product_code }}</td>
                  <td class="center">{{ $product->product_color }}</td>
                  <td class="center">Rp. {{number_format($product->price,0,'','.')}}</td>
                  <td class="center">
                    @if(!empty($product->image))
                    <img src="{{ asset('/images/backend_images/product/small/'.$product->image) }}" style="width:50px;">
                    @endif
                  </td>
                  <td class="center">@if($product->feature_item == 1) Yes @else No @endif</td>
                  <td class="center">
                    <a href="#myModal{{ $product->id }}" data-toggle="modal" class="btn btn-success btn-mini">View</a> 
                    <a href="{{ url('/admin/edit-product/'.$product->id) }}" class="btn btn-primary btn-mini">Edit</a> 
                    <a href="{{ url('/admin/add-attributes/'.$product->id) }}" class="btn btn-success btn-mini">Attribute</a>
                    <a href="{{ url('/admin/add-images/'.$product->id) }}" class="btn btn-info btn-mini">Image</a>
                    <a id="delProduct" rel="{{ $product->id }}" rel1="delete-product" href="{{ url('/admin/delete-product/'.$product->id) }}" class="btn btn-danger btn-mini deleteRecord">Delete</a>
 
                        <div id="myModal{{ $product->id }}" class="modal hide">
                          <div class="modal-header">
                            <button data-dismiss="modal" class="close" type="button">×</button>
                            <h3>{{ $product->product_name }} Full Details</h3>
                          </div>
                          <div class="modal-body">
                            <p>Product ID: {{ $product->id }}</p>
                            <p>Category ID: {{ $product->category_id }}</p>
                            <p>Brand ID: {{ $product->brand_id }}</p>
                            <p>Product Code: {{ $product->product_code }}</p>
                            <p>Product Color: {{ $product->product_color }}</p>
                            <p>Price: Rp. {{number_format($product->price,0,'','.')}}</p>
                            <p>Fabric: </p>
                            <p>Pattern: </p>
                            <p>Description: {{ $product->description }}</p>
                          </div>
                        </div>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection