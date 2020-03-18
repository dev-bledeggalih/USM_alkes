@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Brands</a> <a href="#" class="current">View Brand</a> </div>
    <h1>Brands</h1>
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
            <h5>Brands</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Brand ID</th>
                  <th>Brand Name</th>
                  <th>Brand Image</th>
                  <th>Brand Description</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if(!$brands)
                  <td>Gak ada</td>
                @else
              	@foreach($brands as $brand)
                <tr class="gradeX">
                  <td class="center">{{ $brand->id }}</td>
                  <td class="center">{{ $brand->name }}</td>
                  <td class="center"><img src="{{ asset('/images/frontend_images/brands/'.$brand->image) }}" style="width:250px;" title="{{$brand->image}}"></td>
                  <td class="center">{{ $brand->description }}</td>
                  <td class="center">
                    <a href="{{ url('/admin/edit-brand/'.$brand->id) }}" class="btn btn-primary btn-mini">Edit</a> 
                    <a href="{{ url('/admin/delete-brand/'.$brand->id) }}" class="btn btn-danger btn-mini">Delete</a>
                    <!-- <a id="delBrand" rel="{{ $brand->id }}" rel1="delete-brand" href="javascript:" <?php /* href="{{ url('/admin/delete-brand/'.$brand->id) }}" */ ?> class="btn btn-danger btn-mini deleteRecord">Delete</a> -->
                    <!-- <a <?php /* id="delBrand" href="{{ url('/admin/delete-brand/'.$brand->id) }}" */ ?> rel="{{ $brand->id }}" rel1="delete-category" href="javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a></td> -->
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection