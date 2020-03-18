@extends('layouts.frontLayout.front_design')
@section('content')

<section class="mt-contact-banner mt-banner-22 wow fadeInUp" data-wow-delay="0.4s" style="background-image: url(http://placehold.it/1920x325);">
	<div class="container">
        <div class="row">
            <div class="col-xs-12">
            	<h1 class="text-center">Wish List</h1>
                <!-- Breadcrumbs of the Page -->
                <nav class="breadcrumbs">
                  <ul class="list-unstyled">
                    <li><a href="{{ url('./') }}">Home <i class="fa fa-angle-right"></i></a></li>
                    <li>Wish List</li>
                  </ul>
                </nav>
                <!-- Breadcrumbs of the Page end -->
              </div>
            </div>
          </div>
        </section>
        <div class="paddingbootom-md hidden-xs"></div>
        <!-- Mt Product Table of the Page -->
        <div class="mt-product-table wow fadeInUp" data-wow-delay="0.4s">
          <div class="container">
            @if($userWishlist->count() > 0)
          	<form action="{{ url('/wishlist/storeToCart') }}" class="coupon-form">
          		<fieldset>
	          	@foreach($userWishlist as $wishlist)
	            <div class="row border">
	              <div class="col-xs-12 col-sm-2">
	              	<strong class="price"><input type="checkbox" name="checked" value="1"></strong>
	              </div>
	              <div class="col-xs-12 col-sm-2">
	                <div class="img-holder">
	                  <img src="{{ asset('/images/backend_images/product/small/'.$wishlist->image) }}" alt="image description">
	                </div>
	              </div>
	              <div class="col-xs-12 col-sm-5">
	                <strong class="product-name">{{ $wishlist->product_name }}</strong>
	              </div>
	              <div class="col-xs-12 col-sm-2">
	                <strong class="price">Rp. {{ number_format($wishlist->product_price,0,'','.' )}}</strong>
	              </div>
	              <div class="col-xs-12 col-sm-1">
	                <a  href="{{ url('/wishlist/delete-wishlist/'.$wishlist->id) }}"><i class="fa fa-close"></i></a>
	              </div>
	            </div>
	            @endforeach
            <button type="submit" style="margin-top: 15px;">Add to Cart</button>
            </fieldset>
            </form>
            @else
            <div class="container">
            	<h2 align="center">No Wishlist</h2>
            	<a href="{{ url('./') }}"></a>
            </div>
            @endif
          </div>
        </div><!-- Mt Product Table of the Page end -->
        <div class="paddingbootom-md hidden-xs"></div>
@endsection