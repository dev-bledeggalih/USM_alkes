@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-brand') }}">Brands</a> <a href="#" class="current">Add Brand</a> </div>
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
        @if ($errors->any())
          <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
          </div>
        @endif
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Brand</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('admin/add-brand') }}" name="add_brand" id="add_brand" enctype="multipart/form-data" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Brand Name<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="text" name="name" id="name" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description<br><i>max 200 character</i></label>
                <div class="controls">
                  <textarea name="description" maxlength="200"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Brand Image<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <div class="uploader" id="uniform-undefined"><input name="image" id="image" type="file" style="opacity: 100;" required></div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"><span style="color: red">&nbsp;&nbsp;*</span>&nbsp;&nbsp;<i>Must be filled.</i></label>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Brand" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection