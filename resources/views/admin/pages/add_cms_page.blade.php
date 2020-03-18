@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-cms-pages') }}">CMS Pages</a> <a href="#" class="current">Add CMS Page</a> </div>
    <h1>CMS Pages</h1>
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
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add CMS Page</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('admin/add-cms-page') }}" name="add_cms_page" id="add_cms_page">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Title<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="text" name="title" id="title" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">CMS Page URL<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="text" name="url" id="url" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description<br><i>max 200 character.</i></label>
                <div class="controls">
                  <textarea name="description" maxlength="200"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Meta Title<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="text" name="meta_title" id="meta_title" required>
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
                <input type="submit" value="Add CMS Page" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection