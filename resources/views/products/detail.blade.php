<?php use App\Product; ?>
@extends('layouts.frontLayout.front_design')
@section('content')


<section>
		<div class="container">
			<div class="row">
			@if(Session::has('flash_message_error'))
	            <div class="alert alert-error alert-block" style="background-color:#d7efe5">
	                <button type="button" class="close" data-dismiss="alert">×</button> 
	                    <strong>{!! session('flash_message_error') !!}</strong>
	            </div>
	        @endif
	        <div class="col-md-12">
	        	<section class="mt-product-detial wow fadeInUp" data-wow-delay="0.4s">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
	        					<div class="slider">
									<!-- Comment List of the Page -->
									<ul class="list-unstyled comment-list">
										<li><a href="#"><i class="fa fa-heart"></i>27</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>12</a></li>
										<li><a href="#"><i class="fa fa-share-alt"></i>14</a></li>
									</ul>
									<!-- Comment List of the Page end -->
									<!-- Product Slider of the Page -->
									<div class="product-slider ">
										@if(count($productAltImages)==0)
										<div class="slide">
											<img id="mainImg" src="{{ asset('/images/backend_images/product/medium/'.$productDetails->image) }}" alt="" />
										</div>


										@else
											@foreach($productAltImages as $productShow)
												<div class="slide">
													<img src="{{ asset('images/backend_images/product/medium/'.$productShow->image) }}" alt="image descrption" style="">
												</div>
											@endforeach
										@endif
									</div>
									<!-- Product Slider of the Page end -->
									<!-- Pagg Slider of the Page -->
									<ul class="list-unstyled slick-slider pagg-slider">
										@if(count($productAltImages)>0)
											@foreach($productAltImages as $listImg)
											<li><div class="img"><img src="{{ asset('images/backend_images/product/small/'.$listImg->image) }}" alt="image description"></div></li>
											@endforeach
										@endif
									</ul>
									<!-- Pagg Slider of the Page end -->
								</div>
								<div class="detial-holder">
									<!-- Breadcrumbs of the Page -->
									<ul class="list-unstyled breadcrumbs">
										<?php echo $breadcrumb; ?>
									</ul>
									<!-- Breadcrumbs of the Page end -->
									<h2>{{ $productDetails->product_name }}</h2>
									<!-- Rank Rating of the Page -->
									<div class="rank-rating">
										<span class="total-price">Reviews (12)</span>
										<ul class="list-unstyled rating-list">
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o"></i></a></li>
										</ul>
									</div>
									<!-- Rank Rating of the Page end -->
									
									<?php $getCurrencyRates = Product::getCurrencyRates($productDetails->price); ?>
									<div class="row">
										<div class="col-sm-6">
											<form name="addtoCartForm" id="addtoCartForm"class="product-form" style="margin-bottom: 30px;" action="{{ url('add-cart') }}" method="post">{{ csrf_field() }}
											<fieldset>
												<input type="hidden" name="product_id" value="{{ $productDetails->id }}">
						                        <input type="hidden" name="product_name" value="{{ $productDetails->product_name }}">
						                        <input type="hidden" name="product_code" value="{{ $productDetails->product_code }}">
						                        <input type="hidden" name="product_color" value="{{ $productDetails->product_color }}">
						                        <input type="hidden" name="price" id="price" value="{{ $productDetails->price }}">
						                        <div class="row">
						                        	<div class="col-sm-12" style="">
						                        		<label>Size:</label>
								                        <select id="selSize" name="size" style="width:150px;margin-right: 10px" required>
															<option value="">Select</option>
															@foreach($productDetails->attributes as $sizes)
															<option value="{{ $productDetails->id }}-{{ $sizes->size }}">{{ $sizes->size }}</option>
															@endforeach
														</select>
						                        	</div>
						                        	<div class="col-sm-12" style="margin-top: 15px;">
						                        		<span>
															<input name="quantity" type="text" value="1" />
															<label>Quantity:</label>
															@if($total_stock>0)
																<button type="submit" class="btn btn-fefault cart" id="cartButton" style="margin-top: 10px; margin-bottom: 10px">
																	<i class="fa fa-shopping-cart"></i>
																	Add to cart
																</button>
															@endif	
														</span>
						                        	</div>
						                        </div>

												<p><b>Availability: </b>
													<span id="Availability"> @if($total_stock>0) In Stock @else Out Of Stock @endif</span>
												</p>
												<p><b>Condition:</b> New</p>
												<p><b>Delivery</b>
												<input type="text" name="pincode" id="chkPincode" placeholder="Check Pincode" style="width: 12vw">
												<button type="button" onclick="return checkPincode();">Go</button>
												<span id="pincodeResponse"></span>
												<div style="float:left; margin-top: 10px;" class="sharethis-inline-share-buttons"></div>
											</fieldset>
				                        </form>
										</div>
										<div class="col-sm-6">
											<div class="text-holder">
												<span class="price">IDR {{ number_format($productDetails->price,0,'','.') }}<br>
													@if($productDetails->discount && $productDetails->beforeDiscount > 0)
													<del>IDR {{ number_format($productDetails->beforeDiscount,0,'','.') }}</del>
													@else
													@endif
												</span>
											</div>
											<div class="text-holder">
												<span class="price" style="font-size: 1.5em">
													USD {{ $getCurrencyRates['USD_Rate'] }}&nbsp;&nbsp;<br>
													GBP {{ $getCurrencyRates['GBP_Rate'] }}&nbsp;&nbsp;<br>
													EUR {{ $getCurrencyRates['EUR_Rate'] }}&nbsp;&nbsp;<br>
												</span>
											</div>	
										</div>
									</div>
									<!-- Product Form of the Page -->
									
									</div>
									<div class="txt-wrap">
										<p>aaaaaaaaaaaaaaaaaaaaaaaaaa</p>
									</div>
									<!-- Product Form of the Page end -->
									<ul class="list-unstyled list">
										<li><a href="#"><i class="fa fa-share-alt"></i>SHARE</a></li>
										<li><a href="#"><i class="fa fa-exchange"></i>COMPARE</a></li>
										<li>
											<form action="{{ url('wishlist/add-wishlist') }}">{{ csrf_field() }}
												<input type="hidden" name="product_id" value="{{ $productDetails->id }}">
						                        <input type="hidden" name="product_name" value="{{ $productDetails->product_name }}">
						                        <input type="hidden" name="product_price" value="{{ $productDetails->price }}">
						                        <i class="fa fa-heart">
						                        	<button type="submit">ADD TO WISHLIST</button>
						                        </i>
					                        </form>
					                    </li>
									</ul>
								</div>
	        </div>
	    </div></div></section><div class="product-detail-tab wow fadeInUp" data-wow-delay="0.4s">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<ul class="mt-tabs text-center text-uppercase">
									<li><a href="#tab1" class="active">DESCRIPTION</a></li>
									<li><a href="#tab2">INFORMATION</a></li>
									<li><a href="#tab3">REVIEWS (12)</a></li>
								</ul>
								<div class="tab-content">
									<div id="tab1">
										<p>Description: {{ $productDetails->description }}</p>
										<p>Care : {{ $productDetails->care }}</p>
									</div>
									<div id="tab2">
										<div class="row">
											<div class="col-sm-6">
												<h2 class="text-center">Product Info</h2>
												<p>Care : {{ $productDetails->care }}</p>
												<p>Product Code: {{ $productDetails->product_code }}</p>
												<p>Product Color: {{ $productDetails->product_color }}</p>
												@if(!empty($productDetails->sleeve))
													<p>Sleeve: {{ $productDetails->sleeve }}</p>
												@endif
												@if(!empty($productDetails->pattern))
													<p>Pattern: {{ $productDetails->pattern }}</p>
												@endif
											</div>
											<div class="col-sm-6">
												@if(!empty($productDetails->video))
												<h2 class="text-center">Product Video</h2>
												<div class="tab-pane fade" id="video" >
													<div class="col-sm-12">
														<video src="{{ url('videos/'.$productDetails->video)}}" controls style="width: 100%" type="video/mp4">
														</video>
													</div>
												</div>
											@endif	
											</div>
										</div>
									</div>
									<div id="tab3">
										<div class="product-comment">
											<div class="mt-box">
												<div class="mt-hold">
													<ul class="mt-star">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
													<span class="name">John Wick</span>
													<time datetime="2016-01-01">09:10 Nov, 19 2016</time>
												</div>
												<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit sse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
											</div>
											<div class="mt-box">
												<div class="mt-hold">
													<ul class="mt-star">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>
													<span class="name">John Wick</span>
													<time datetime="2016-01-01">09:10 Nov, 19 2016</time>
												</div>
												<p>Usmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit sse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
											</div>
											<form action="#" class="p-commentform">
												<fieldset>
													<h2>Add  Comment</h2>
													<div class="mt-row">
														<label>Rating</label>
														<ul class="mt-star">
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star-o"></i></li>
															<li><i class="fa fa-star-o"></i></li>
														</ul>
													</div>
													<div class="mt-row">
														<label>Name</label>
														<input type="text" class="form-control">
													</div>
													<div class="mt-row">
														<label>E-Mail</label>
														<input type="text" class="form-control">
													</div>
													<div class="mt-row">
														<label>Review</label>
														<textarea class="form-control"></textarea>
													</div>
													<button type="submit" class="btn-type4">ADD REVIEW</button>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="col-sm-3">
					@include('layouts.frontLayout.front_sidebar')	
				</div>
				
				<div class="col-sm-9 padding-right">

					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
								<a id="mainImgLarge" href="{{ asset('/images/backend_images/product/large/'.$productDetails->image) }}">
									<img style="width:300px" id="mainImg" src="{{ asset('/images/backend_images/product/medium/'.$productDetails->image) }}" alt="" />
								</a>
								</div>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								  


								    {{--<div class="carousel-inner">
										@if(count($productAltImages)>0)
										<div class="item active thumbnails">
												@foreach($productAltImages as $altimg)
													<a href="{{ asset('images/backend_images/product/medium/'.$altimg->image) }}" data-standard="{{ asset('images/backend_images/product/small/'.$altimg->image) }}">
										  				<img class="changeImage" style="width:80px; cursor:pointer" src="{{ asset('images/backend_images/product/small/'.$altimg->image) }}" alt="">
													</a>
												@endforeach
										</div>
										@endif
									</div>--}}

								  <!-- Controls -->
								  <!-- <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a> -->
							</div>

						</div>
						<div class="col-sm-7">
							<form name="addtoCartForm" id="addtoCartForm" action="{{ url('add-cart') }}" method="post">{{ csrf_field() }}
		                        <input type="hidden" name="product_id" value="{{ $productDetails->id }}">
		                        <input type="hidden" name="product_name" value="{{ $productDetails->product_name }}">
		                        <input type="hidden" name="product_code" value="{{ $productDetails->product_code }}">
		                        <input type="hidden" name="product_color" value="{{ $productDetails->product_color }}">
		                        <input type="hidden" name="price" id="price" value="{{ $productDetails->price }}">
								<div class="product-information"><!--/product-information-->
									<div align="left"><?php echo $breadcrumb; ?></div>
									<div>&nbsp;</div>
									<img src="images/product-details/new.jpg" class="newarrival" alt="" />
									<h2>{{ $productDetails->product_name }}</h2>
									<p>Product Code: {{ $productDetails->product_code }}</p>
									<p>Product Color: {{ $productDetails->product_color }}</p>
									@if(!empty($productDetails->sleeve))
										<p>Sleeve: {{ $productDetails->sleeve }}</p>
									@endif
									@if(!empty($productDetails->pattern))
										<p>Pattern: {{ $productDetails->pattern }}</p>
									@endif
									<p>
										<select id="selSize" name="size" style="width:150px;" required>
											<option value="">Select</option>
											@foreach($productDetails->attributes as $sizes)
											<option value="{{ $productDetails->id }}-{{ $sizes->size }}">{{ $sizes->size }}</option>
											@endforeach
										</select>	
									</p>
									<span>
										<?php $getCurrencyRates = Product::getCurrencyRates($productDetails->price); ?>
										<span id="getPrice">
											IDR {{ $productDetails->price }}<br>
											<h2>
												USD {{ $getCurrencyRates['USD_Rate'] }}<br>
												GBP {{ $getCurrencyRates['GBP_Rate'] }}<br>
												EUR {{ $getCurrencyRates['EUR_Rate'] }}<br>
											</h2>
										</span>
										<label>Quantity:</label>
										<input name="quantity" type="text" value="1" />
										@if($total_stock>0)
											<button type="submit" class="btn btn-fefault cart" id="cartButton">
												<i class="fa fa-shopping-cart"></i>
												Add to cart
											</button>
										@endif	
									</span>
									<p><b>Availability: </b><span id="Availability"> @if($total_stock>0) In Stock @else Out Of Stock @endif</span></p>
									<p><b>Delivery</b>
									<input type="text" name="pincode" id="chkPincode" placeholder="Check Pincode">
									<button type="button" onclick="return checkPincode();">Go</button>
									<span id="pincodeResponse"></span>
									<div style="float:left; margin-top: 10px;" class="sharethis-inline-share-buttons"></div>
						
								</div><!--/product-information-->
							</form>
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#description" data-toggle="tab">Description</a></li>
								<li><a href="#care" data-toggle="tab">Material & Care</a></li>
								<li><a href="#delivery" data-toggle="tab">Delivery Options</a></li>
								@if(!empty($productDetails->video))
									<li><a href="#video" data-toggle="tab">Product Video</a></li>
								@endif
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="description" >
								<div class="col-sm-12">
									<p>{{ $productDetails->description }}</p>
								</div>	
							</div>
							
							<div class="tab-pane fade" id="care" >
								<div class="col-sm-12">
									<p>{{ $productDetails->care }}</p>
								</div>
							</div>
							
							<div class="tab-pane fade" id="delivery" >
								<div class="col-sm-12">
									<p>100% Original Products <br>
									Cash on delivery might be available</p>
								</div>
							</div>

							@if(!empty($productDetails->video))
								<div class="tab-pane fade" id="video" >
									<div class="col-sm-12">
										<video controls width="640" height="480">
										  <source src="{{ url('videos/'.$productDetails->video)}}" type="video/mp4">
										</video>
									</div>
								</div>
							@endif
					
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<?php $count=1; ?>
								@foreach($relatedProducts->chunk(3) as $chunk)
								<div <?php if($count==1){ ?> class="item active" <?php } else { ?> class="item" <?php } ?>>	
									@foreach($chunk as $item)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img style="width:200px;" src="{{ asset('images/backend_images/product/small/'.$item->image) }}" alt="" />
													<h2>IDR {{ $item->price }}</h2>
													<p>{{ $item->product_name }}</p>
													<a href="{{ url('/product/'.$item->id) }}"><button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></a>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
								<?php $count++; ?>
								@endforeach
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>	

@endsection