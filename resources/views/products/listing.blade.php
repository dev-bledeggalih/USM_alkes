@extends('layouts.frontLayout.front_design')

@section('content')

<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							@foreach($banners as $key => $banner)
								<li data-target="#slider-carousel" data-slide-to="0" @if($key==0) class="active" @endif></li>
							@endforeach
							<!-- <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li> -->
						</ol>
						
						<div class="carousel-inner">
							<!-- <div class="item">
								<div class="col-sm-6">
									<h1><span>S</span>chon</h1>
									<h2>An E-Commerce</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div> -->
							@foreach($banners as $key => $banner)
							<div class="item @if($key==0) active @endif">
								<div class="col-sm-12" style="background-image: url('{{asset('images/frontend_images/banners/'.$banner->image)}}')" >
									<h1>{{ $banner->title }}</h1>
									<h2>Uhuy</h2>
									<p>Banner description. </p>
									<button type="button" class="btn btn-default get" href="{{ $banner->link }}">Get it now</button>
								</div>
								<div class="" >

									<!-- <img src="../images/frontend_images/banners/{{ $banner->image }}" style="filter: brightness(50%);"> -->
									
								</div>
							</div>
							@endforeach							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
</section><!--/slider-->
	
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				@include('layouts.frontLayout.front_sidebar')
			</div>
			
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">
						@if(!empty($search_product))
							{{ $search_product }} Item
						@else
							{{ $categoryDetails->name }} Items
						@endif
						    ({{ count($productsAll) }})
					</h2>
					<div align="left"><?php echo $breadcrumb; ?></div>
					<div>&nbsp;</div>
					@foreach($productsAll as $pro)
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{ asset('/images/backend_images/product/small/'.$pro->image) }}" alt="" />
										<h2>Rp. {{number_format($pro->price,0,'','.')}}</h2>
										<p>{{ $pro->product_name }}</p>
										<a href="{{ url('/product/'.$pro->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rp. {{number_format($pro->price,0,'','.')}}</h2>
											<p>{{ $pro->product_name }}</p>
											<a href="{{ url('/product/'.$pro->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
							</div>
							<div class="choose">
								<ul class="nav nav-pills nav-justified">
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					@if(empty($search_product))
						<div align="center">{{ $productsAll->links() }}</div>
					@endif
				</div>
				
			</div>
		</div>
	</div>
</section>

@endsection