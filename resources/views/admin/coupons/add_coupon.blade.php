@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-coupons') }}">Coupons</a> <a href="#" class="current">Add Coupon</a> </div>
    <h1>Coupons</h1>
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
            <h5>Add Coupon</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('admin/add-coupon') }}" name="add_coupon" id="add_coupon">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Amount Type<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <select name="amount_type" id="amount_type">
                    <option value="Percentage">Percentage</option>
                    <option value="Fixed">Fixed</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Coupon Code<span style="color: red">&nbsp;&nbsp;*</span><br><i>more than 5 character</i></label>
                <div class="controls">
                  <input type="text" name="coupon_code" id="coupon_code" maxlength="15" minlength="5" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Amount<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="number" name="amount" id="amount" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Expiry Date<span style="color: red">&nbsp;&nbsp;*</span><br><i>format (YYYY-MM-DD)</i></label>
                <div class="controls">
                  <input type="text" name="expiry_date" id="expiry_date" required>
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
                <input type="submit" value="Add Coupon" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection