@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-products') }}">Products</a> <a href="#" class="current">Add Product</a> </div>
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
            <h5>Add Product</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('admin/add-product') }}" name="add_product" id="add_product" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Under Category<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <select name="category_id" id="category_id">
                    <?php echo $categories_drop_down; ?>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Brand Name<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <select name="brand_id" id="brand_id">
                    <?php echo $brands_drop_down; ?>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Product Name<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="text" name="product_name" id="product_name" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Product Code<span style="color: red">&nbsp;&nbsp;*</span><br><i>min: 5, max: 15 character.</i></label>
                <div class="controls">
                  <input type="text" name="product_code" id="product_code" maxlength="15" minlength="5" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Product Color<span style="color: red">&nbsp;&nbsp;*</span></label>
                <div class="controls">
                  <input type="text" name="product_color" id="product_color" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description<br><i>max 200 character</i></label>
                <div class="controls">
                  <textarea name="description" style="height:10vh" maxlength="200"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Material & Care</label>
                <div class="controls">
                  <textarea name="care" style="height:10vh" maxlength="200"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Sleeve</label>
                <div class="controls">
                  <select name="sleeve" class="form-control">
                    <option value="">Select Sleeve</option>
                    @foreach($sleeveArray as $sleeve)
                      <option value="{{ $sleeve }}">{{ $sleeve }}</option>
                    @endforeach
                  </select>  
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Pattern</label>
                <div class="controls">
                  <select name="pattern" class="form-control">
                    <option value="">Select Pattern</option>
                    @foreach($patternArray as $pattern)
                      <option value="{{ $pattern }}">{{ $pattern }}</option>
                    @endforeach
                  </select>  
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Price<span style="color: red">&nbsp;&nbsp;*</span><br><i>must more than Rp.100</i></label>
                <div class="controls">
                  <input type="text" name="price" id="price" min="100" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Weight<span style="color: red">&nbsp;&nbsp;*</span><br><i>more than 1 gram (g)</i></label>
                <div class="controls">
                  <input type="text" name="weight" id="weight" min="1" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image<span style="color: red">&nbsp;&nbsp;*</span><br><i>(png, jpg, jpeg).</i></label>
                <div class="controls">
                  <div id="uniform-undefined"><input name="image" id="image" type="file" required></div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Video</label>
                <div class="controls">
                  <div id="uniform-undefined"><input name="video" id="video" type="file"></div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Feature Item</label>
                <div class="controls">
                  <input type="checkbox" name="feature_item" id="feature_item" value="1">
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
                <input type="submit" value="Add Product" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection