@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-banners') }}">Banners</a> <a href="#" class="current">Add Banner</a> </div>
    <h1>Banners</h1>
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
            <h5>Add Banner</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('admin/add-banner') }}" name="add_banner" id="add_banner" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Banner Image<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <div class="uploader" id="uniform-undefined"><input name="image" id="image" type="file" size="19" style="opacity: 100;" required></div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Title<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="text" name="title" id="title" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Link<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="text" name="link" id="link" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Enable</label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Grid Banner<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="radio" name="subBanner" value="0">Main Grid Slideshow <small>Resolution 1920x585 px</small><br>
                  <input type="radio" name="subBanner" value="1">Sub Banner Grid 1 <small>Resolution 385x480 px</small><br>
                  <input type="radio" name="subBanner" value="2">Sub Banner Grid 2 <small>Resolution 385x225 px</small><br>
                  <input type="radio" name="subBanner" value="3">Sub Banner Grid 3 <small>Resolution 385x225 px</small><br>
                  <input type="radio" name="subBanner" value="4">Sub Banner Grid 4 <small>Resolution 385x480 px</small><br>
                  <input type="radio" name="subBanner" value="5">Main Grid Product Slideshow <small>Resolution 1140x340 px</small></div>
              </div>
              <div class="control-group">
                <label class="control-label"><span style="color: red">&nbsp;&nbsp;*</span>&nbsp;&nbsp;<i>Must be filled.</i></label>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Banner" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection