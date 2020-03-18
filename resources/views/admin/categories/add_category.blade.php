@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-categories') }}">Categories</a> <a href="#" class="current">Add Category</a> </div>
    <h1>Categories</h1>
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
            <h5>Add Category</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('admin/add-category') }}" name="add_category" id="add_category" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Category Name<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="text" name="category_name" id="category_name" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Category Level</label>
                <div class="controls">
                  <select name="parent_id" style="">
                    <option value="0">Main Category</option>
                    @foreach($levels as $val)
                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description<br><i>max 200 character.</i></label>
                <div class="controls">
                  <textarea name="description" maxlength="200"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">URL<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="text" name="url" id="url" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Meta Title</label>
                <div class="controls">
                  <input type="text" name="meta_title" id="meta_title">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Meta Description<br><i>max 200 character.</i></label>
                <div class="controls">
                  <input type="text" name="meta_description" id="meta_description" maxlength="200">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Meta Keywords<br><i>max 200 character.</i></label>
                <div class="controls">
                  <input type="text" name="meta_keywords" id="meta_keywords" maxlength="200">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Enable</label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"><span style="color: red">&nbsp;&nbsp;*</span>&nbsp;&nbsp;<i>Must be filled.</i></label>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add Category" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection