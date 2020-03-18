<?php
	use App\Http\Controllers\Controller;

	$slideBrand = Controller::slideBrand();
?>
@extends('layouts.frontLayout.front_design')

@section('content')

<style>
	* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body, html{
  height: 100%;
}

body{
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
  background-color: #111;
  user-select: none;
}

img{
  display: block;
  width: 100%;
  height: auto;
}

.slider{
  position: relative;
  height: 100%;
  width: 100%;
  cursor: grab;
  
  &.is-grabbing{
    cursor: grabbing;
  }
}

.slider__inner{
  position: absolute;
  top: 0;
  left: 0;
  height: 100vh;
  pointer-events: none;
}

.slide{
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 60vw;
  height: 60vh;
  padding: 1rem;
}

.slide__bg{
  position: absolute;
  top: 10%;
  left: 10%;
  bottom: 10%;
  right: 10%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.slide__title{
  position: relative;
  color: #fff;
  font-size: calc(1rem + 3vw);
  font-weight: normal;
  z-index: 2;
}

.text{
  position: absolute;
  color: #666;
  left: 4rem;
  bottom: 3rem;
}

.cursor-wrap{
  position: fixed;
  top: 0;
  left: 0;
  pointer-events: none;
}

.cursor{
  position: fixed;
  top: -30px;
  left: -30px;
}
</style>

<section id="slider">
	<div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 1122px;"><ul class="ul bxslider" style="width: 515%; position: relative; transition-duration: 1s; transform: translate3d(-5086px, 0px, 0px);"><li style="float: left; list-style: none; position: relative; width: 2543px;" class="bx-clone">
			<a href="">
				<img class="img" src="https://usm-alkesmata.com/uploads/img/slider/20180821144427-eye-instruments.jpg" alt="Eye Instruments">
			</a>
		</li>
				<li style="float: left; list-style: none; position: relative; width: 2543px;">
			<a href="">
				<img class="img" src="https://usm-alkesmata.com/uploads/img/slider/20200213113716-eye-disposables.jpg" alt="Eye Disposables">
			</a>
		</li>
				<li style="float: left; list-style: none; position: relative; width: 2543px;">
			<a href="">
				<img class="img" src="https://usm-alkesmata.com/uploads/img/slider/20181023094126-eye-equipments.jpg" alt="Eye Equipments">
			</a>
		</li>
				<li style="float: left; list-style: none; position: relative; width: 2543px;">
			<a href="">
				<img class="img" src="https://usm-alkesmata.com/uploads/img/slider/20180821144427-eye-instruments.jpg" alt="Eye Instruments">
			</a>
		</li>
			<li style="float: left; list-style: none; position: relative; width: 2543px;" class="bx-clone">
			<a href="">
				<img class="img" src="https://usm-alkesmata.com/uploads/img/slider/20200213113716-eye-disposables.jpg" alt="Eye Disposables">
			</a>
		</li></ul></div><div class="bx-controls bx-has-pager"><div class="bx-pager bx-default-pager"><div class="bx-pager-item"><a href="" data-slide-index="0" class="bx-pager-link">1</a></div><div class="bx-pager-item"><a href="" data-slide-index="1" class="bx-pager-link active">2</a></div><div class="bx-pager-item"><a href="" data-slide-index="2" class="bx-pager-link">3</a></div></div></div></div>
</section>
<section id="produk-home">
	<div class="container">
		<div class="produk-home__top">
			<h1 class="title-section text-center">Latest News</h1>
			<p class="mb-0 text-center">Welcome to Universal Star Multilink</p>
		</div><!-- produk-home__top -->

		<div class="row row-eq-height small-gutters">
					</div><!-- row -->
	</div><!-- container -->
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			<div class="mt-patners wow fadeInUp" data-wow-delay="0.4s">
				<h2 align="center" class="heading">BRANDS</h2>
					<!-- patner slider start here -->
					<div class="patner-slider">
						<!-- slide start here -->
						@foreach($slideBrand as $brand)
							<div class="slide">
								<div class="box1">
									<div class="box2">
										<a href="#">
											<img src="{{ asset('/images/frontend_images/brands/'.$brand->image) }}" alt="{{ $brand->name }}" style="width: 75%; height: 12vh">
										</a>
										<div class="txt">
										<strong class="title">{{ $brand->name }}</strong>
									</div>
									</div>
									
								</div>
							</div>
						@endforeach
						<!-- slide end here -->
					</div>
					<!-- patner slider end here -->
				</div>	
			</div>
		</div>
	</div>
</section>
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<h1 class="title-section about-home__title text-white text-capitalize">one - stop shopping <br> for a wide range <br> of ophthalmic disposables, instruments &amp; equipment products</h1>
				<p class="mb-0">PT. UNIVERSAL STAR MULTILINK, selanjutnya disebut USM, adalah perusahaan yang bergerak di bidang Alat Kesehatan Mata. Perusahaan berdiri pada tanggal 24 Februari 2008 dengan berbadan usaha PT (Perseroan Terbatas) yang pada awalnya hanya memfokuskan pada penjualan Alat Kesehatan Mata Habis Pakai (Disposable) &amp; Instrumen Mata.</p>
			</div>
		</div>
	</div>
</section>
<section id="kategori">
	<div class="item-kat">
		<a href="https://usm-alkesmata.com/product/category/eye-disposables">
			<img class="img" src="https://usm-alkesmata.com/uploads/img/produk/kategori/20200302090733-eye-disposables.jpg" alt="Eye Disposables">
			<span>Eye Disposables</span>
		</a>
	</div>
	<div class="item-kat">
		<a href="https://usm-alkesmata.com/product/category/eye-instruments">
			<img class="img" src="https://usm-alkesmata.com/uploads/img/produk/kategori/20200302090743-eye-instruments.jpg" alt="Eye Instruments">
			<span>Eye Instruments</span>
		</a>
	</div>
	<div class="item-kat">
		<a href="https://usm-alkesmata.com/product/category/eye-equipment">
			<img class="img" src="https://usm-alkesmata.com/uploads/img/produk/kategori/20200302090753-eye-equipment.jpg" alt="Eye Equipment">
			<span>Eye Equipment</span>
		</a>
	</div>
</section>

<section id="contact">
	<div class="wrap-contact">
		<div class="container">
			<h1 class="title-section text-white">We are ready to help you</h1>
			<div class="wrap-item-kontak owl-cs owl-carousel owl-theme owl-responsive-992 owl-loaded">
				<div class="owl-stage" style="">
					<div class="owl-item cloned" style="width: 370px; margin-right: 0px;">
						<div class="item-kontak">
							<h3>Customer Service 3</h3>
							<p><i class="fa fa-circle"></i> offline</p>
							<span>
								<i class="fa fa-envelope"></i>
								Email: <a href="mailto:usm.nossy@gmail.com">usm.nossy@gmail.com</a>
							</span>
								<!-- <span>
									<i class="fa fa-circle"></i>
									Pin BBM: CS-3						</span> -->
							<span>
								<i class="fa fa-whatsapp text-success"></i>
								Whatsapp: <a target="_blank" href="https://web.whatsapp.com/send?phone=628119932209">08119932209</a>
							</span>
						</div>
					</div>
				</div>
				
										
									
									
			<div class="owl-controls"><div class="owl-nav"><div class="cs-prev" style="display: none;">prev</div><div class="cs-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div><!-- wrap-item-kontak -->
		</div><!-- container -->
	</div><!-- wrap-kontak -->
</section>

{{--
<style>
	.containerForSlider{
		position: relative;
		text-align: center;
	}


	.centeredTextOverImage{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4} 
	  to {opacity: 1}
	}
</style>

<main id="">
	<div class="container" style="background-color: white; padding: 0">
		<div class="mt-main-slider" style="background-color: white">
			<div class="slider">
				@foreach($banners as $key => $banner)
				<!-- <a  href="{{ $banner->link }}"> -->
				<div class="sliderBanner fade">
					<div class="holder text-center">
						<div class="containerForSlider">
							<img src="{{asset('images/frontend_images/banners/'.$banner->image)}}" style="width: 100%">
							<div class="centeredTextOverImage">
								<h1>{{ $banner->title }}</h1>
								<h2></h2>
								<a href="{{ $banner->link }}" class="shop">shop now</a>
							</div>
						</div>
					</div>
				</div>
				<!-- </a> -->
				@endforeach
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="banner-frame">
					<div class="banner-1 wow fadeInLeft" data-wow-delay="0.4s" style="">
						@foreach($subBanner as $sub1 => $banner)
						<img alt="image description" src="images/frontend_images/banners/{{ $banner->image }}">
						<div class="holder">
							<h2>{{$banner->title}}</h2>
							<a class="btn-shop add" href="{{$banner->link}}">
								<span>shop now</span>
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
						@endforeach
					</div>
					<div class="banner-box first">
						<div class="banner-2 wow fadeInUp" data-wow-delay="0.4s" style="">
							@foreach($subBanner2 as $sub2 => $banner)
							<img alt="image description" src="images/frontend_images/banners/{{ $banner->image }}">
							<div class="holder">
								<h2>{{$banner->title}}</h2>
								<a href="{{$banner->link}}" class="shop">SHOP NOW</a>
							</div>
							@endforeach
						</div>
						<div class="banner-3 right wow fadeInDown" data-wow-delay="0.4s" style="">
							@foreach($subBanner3 as $sub3 => $banner)
							<img alt="image description" src="images/frontend_images/banners/{{ $banner->image }}">
							<div class="holder">
								<h2>{{$banner->title}}</h2>
								<a href="{{$banner->link}}" class="shop">SHOP NOW</a>
							</div>
							@endforeach
						</div>
					</div>
					<div class="banner-4 hidden-sm wow fadeInRight" data-wow-delay="0.4s" style="">
						@foreach($subBanner4 as $sub4 => $banner)
						<img alt="image description" src="images/frontend_images/banners/{{ $banner->image }}">
						<div class="holder">
							<h2>{{$banner->title}}</h2>
							<a class="btn-shop add" href="{{$banner->link}}">
								<span>shop now</span>
								<i class="fa fa-angle-right"></i>
							</a>
						</div>
						@endforeach
					</div>
				</div>
				<div class="mt-producttabs wow fadeInUp" data-wow-delay="0.4s">
					<ul class="producttabs">
						<li><a href="#tab1" class="active">FEATURED</a></li>
						<li><a href="#tab2">LATEST</a></li>
						<li><a href="#tab3">BEST SELLER</a></li>
					</ul>
					<div class="tab-content text-center">
						<div id="tab1">
							<div class="tabs-slider">	
								@foreach($featuredProd as $featuredPro)
								<div class="slide">
									<div class="mt-product1 mt-paddingbottom20">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="{{ url('/product/'.$featuredPro->id) }}"><img src="{{ asset('/images/backend_images/product/small/'.$featuredPro->image) }}" alt="{{$featuredPro->product_name}}"></a>
													<span class="caption">
														<span class="new">NEW</span>
													</span>
													<!-- <ul class="mt-stars">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul> -->
													<ul class="links">
														<li><a href="{{ url('/product/'.$featuredPro->id) }}"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a></li>
														<li><a href="#"><i class="fa fa-heart"></i></a></li>
														<li><a href="#"><i class="fa fa-exchange"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="{{ url('/product/'.$featuredPro->id) }}">{{$featuredPro->product_name}}</a></strong>
											<span class="price"><i class=""></i> <span>Rp. {{number_format($featuredPro->price,0,'','.')}}</span></span>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<div id="tab2">
							<div class="tabs-slider">	
								@foreach($lastProd as $lastPro)
								<div class="slide">
									<div class="mt-product1 mt-paddingbottom20">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="{{ url('/product/'.$lastPro->id) }}"><img src="{{ asset('/images/backend_images/product/small/'.$lastPro->image) }}" alt="{{$lastPro->product_name}}"></a>
													
													<span class="caption">
														<span class="new">NEW</span>
													</span>

													<ul class="mt-stars">
														<!-- <li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li> -->
													</ul>
													<ul class="links">
														<li><a href="{{ url('/product/'.$lastPro->id) }}"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a></li>
														<li><a href="#"><i class="fa fa-heart"></i></a></li>
														<li><a href="#"><i class="fa fa-exchange"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="{{ url('/product/'.$lastPro->id) }}">{{$lastPro->product_name}}</a></strong>
											<span class="price"><i class=""></i> <span>Rp. {{number_format($lastPro->price,0,'','.')}}</span></span>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<div id="tab3">
							<div class="tabs-slider">	
								@foreach($featuredProd as $featuredPro)
								<div class="slide">
									<div class="mt-product1 mt-paddingbottom20">
										<div class="box">
											<div class="b1">
												<div class="b2">
													<a href="{{ url('/product/'.$featuredPro->id) }}"><img src="{{ asset('/images/backend_images/product/small/'.$featuredPro->image) }}" alt="{{$featuredPro->product_name}}"></a>
													
													<span class="caption">
														<span class="best-price">Best Price</span>
													</span>
													
													<ul class="mt-stars">
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star-o"></i></li>
													</ul>

													<ul class="links">
														<li><a href="{{ url('/product/'.$featuredPro->id) }}"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a></li>
														<li><a href="#"><i class="fa fa-heart"></i></a></li>
														<li><a href="#"><i class="fa fa-exchange"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="txt">
											<strong class="title"><a href="{{ url('/product/'.$featuredPro->id) }}">{{$featuredPro->product_name}}</a></strong>
											<span class="price"><i class=""></i> <span>Rp. {{number_format($featuredPro->price,0,'','.')}}</span></span>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<section class="">
<div class="mt-bestseller bg-white text-center wow fadeInUp" data-wow-delay="0.4s">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 mt-heading text-uppercase">
								<h2 class="heading">BEST SELLER</h2>
								<p>EXCEPTEUR SINT OCCAECAT</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="bestseller-slider">
									@foreach($bestProd as $best)
										<div class="slide">
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.html" tabindex="0"><img src="http://placehold.it/275x285" alt="image description"></a>
														<span class="caption">
															<span class="best-price">Best Price</span>
														</span>
														<ul class="links">
															<li><a href="#" tabindex="0"><i class="fa fa-shopping-cart"></i></a></li>
															<li><a href="#" tabindex="0"><i class="fa fa-heart"></i></a></li>
															<li><a href="#" tabindex="0"><i class="fa fa-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.html" tabindex="0">Bombi Chair</a></strong>
												<span class="price"><i class=""></i> <span>399,00</span></span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
									@endforeach
							</div>
						</div>
					</div>
	</div>
	</div>	
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			<div class="mt-patners wow fadeInUp" data-wow-delay="0.4s">
				<h2 align="center" class="heading">BRANDS</h2>
					<!-- patner slider start here -->
					<div class="patner-slider">
						<!-- slide start here -->
						@foreach($slideBrand as $brand)
							<div class="slide">
								<div class="box1">
									<div class="box2">
										<a href="#">
											<img src="{{ asset('/images/frontend_images/brands/'.$brand->image) }}" alt="{{ $brand->name }}" style="width: 75%; height: 12vh">
										</a>
										<div class="txt">
										<strong class="title">{{ $brand->name }}</strong>
									</div>
									</div>
									
								</div>
							</div>
						@endforeach
						<!-- slide end here -->
					</div>
					<!-- patner slider end here -->
				</div>	
			</div>
		</div>
	</div>
</section>
<section>
	<div class="mt-smallproducts wow fadeInUp" data-wow-delay="0.4s">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
								<h3 class="heading">Hot Sale</h3>
								<!-- mt product4 start here -->
								@foreach($smallHotProd as $hotProd)
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="{{ url('/product/'.$hotProd->id) }}"><img alt="{{$hotProd->product_name}}" src="{{ asset('/images/backend_images/product/small/'.$hotProd->image) }}"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="{{ url('/product/'.$hotProd->id) }}">{{$hotProd->product_name}}</a></strong>
										</div>
										<!-- <del class="off"></del> --> <!-- ini kalo dia punya diskon dibuka tapi blom ada -->
										<span class="price">Rp. {{number_format($hotProd->price,0,'','.')}}</span>
									</div>
								</div>
								@endforeach
								<!-- mt product4 end here -->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
								<h3 class="heading">Featured Products</h3>
								<!-- mt product4 start here -->
								@foreach($smallFeatProd as $featProd)
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="{{ url('/product/'.$featProd->id) }}"><img alt="{{$featProd->product_name}}" src="{{ asset('/images/backend_images/product/small/'.$featProd->image) }}"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="{{ url('/product/'.$featProd->id) }}">{{$featProd->product_name}}</a></strong>
										</div>
										<!-- <del class="off"></del> --> <!-- ini kalo dia punya diskon dibuka tapi blom ada -->
										<span class="price">Rp. {{number_format($featProd->price,0,'','.')}}</span>
									</div>
								</div>
								@endforeach
								<!-- mt product4 end here -->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomxs">
								<h3 class="heading">Sale Products</h3>
								<!-- mt product4 start here -->
								@foreach($smallSaleProd as $saleProd)
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="{{ url('/product/'.$saleProd->id) }}"><img alt="{{$saleProd->product_name}}" src="{{ asset('/images/backend_images/product/small/'.$saleProd->image) }}"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="{{ url('/product/'.$saleProd->id) }}">{{$saleProd->product_name}}</a></strong>
											<!-- <ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul> --> <!-- kalo dia ada si rating di buka -->
										</div>
										<!-- <del class="off"></del> --> <!-- ini kalo dia punya diskon dibuka tapi blom ada -->
										<span class="price">Rp. {{number_format($saleProd->price,0,'','.')}}</span>
									</div>
								</div>
								@endforeach
								<!-- mt product4 end here -->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3">
								<h3 class="heading">Top Rated Products</h3>
								<!-- mt product4 start here -->
								@foreach($smallTopProd as $topProd)
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="{{ url('/product/'.$topProd->id) }}"><img alt="{{$topProd->product_name}}" src="{{ asset('/images/backend_images/product/small/'.$topProd->image) }}"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="{{ url('/product/'.$topProd->id) }}">{{$topProd->product_name}}</a></strong>
										</div>
										<!-- <del class="off"></del> --> <!-- ini kalo dia punya diskon dibuka tapi blom ada -->
										<span class="price">Rp. {{number_format($topProd->price,0,'','.')}}</span>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
</section>--}}

{{--
<section class="" style="margin-top: 5vh">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				@include('layouts.frontLayout.front_sidebar')
			</div>
			
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Features Items</h2><div align="right">{{ $productsAll->links() }}</div>
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
					
				</div><!--features_items-->
			</div>
		</div>
	</div>
</section>
--}}

<script>
	// variabel buat si sliderBanner
	var slidesIndex = 0;
	showSlides(slidesIndex);
	
	// fungsi method si sliderBanner biar auto slide
	function showSlides(n) {
		var i;
		var slidesBanner = document.getElementsByClassName("sliderBanner");
		for (i = 0; i < slidesBanner.length; i++) {
			slidesBanner[i].style.display = "none";  
		}
		slidesIndex++;
		if (slidesIndex > slidesBanner.length){
			slidesIndex = 1
		}
		slidesBanner[slidesIndex-1].style.display = "block";
		setTimeout(showSlides, 5000); //5 detik per slide banner
	}
</script>

<script>
	function _getClosest(item, array, getDiff) {
    var closest,
        diff;

    if (!Array.isArray(array)) {
        throw new Error("Get closest expects an array as second argument");
    }

    array.forEach(function (comparedItem, comparedItemIndex) {
        var thisDiff = getDiff(comparedItem, item);

        if (thisDiff >= 0 && (typeof diff == "undefined" || thisDiff < diff)) {
            diff = thisDiff;
            closest = comparedItemIndex;
        }
    });

    return closest;
}

function number(item, array) {
  return _getClosest(item, array, function (comparedItem, item) {
    return Math.abs(comparedItem - item);
  });
}
    
function lerp(a, b, n) {
    return (1 - n) * a + n * b
}

class Slider {
  constructor(options = {}) {
    this.bind()
    
    this.opts = {
      el: options.el || '.js-slider',
      ease: options.ease || 0.1,
      speed: options.speed || 1.5,
      velocity: 25,
      scroll: options.scroll || false
    }
    
    this.slider = document.querySelector('.js-slider')
    this.sliderInner = this.slider.querySelector('.js-slider__inner')
    this.slides = [...this.slider.querySelectorAll('.js-slide')]
    this.slidesNumb = this.slides.length
    
    this.rAF = undefined
    
    this.sliderWidth = 0
    
    this.onX = 0
    this.offX = 0
    
    this.currentX = 0
    this.lastX = 0
    
    this.min = 0
    this.max = 0

    this.centerX = window.innerWidth / 2
  }
  
  bind() {
    ['setPos', 'run', 'on', 'off', 'resize'].forEach((fn) => this[fn] = this[fn].bind(this))
  }
  
  setBounds() {
    const bounds = this.slides[0].getBoundingClientRect()
    const slideWidth = bounds.width

    this.sliderWidth = this.slidesNumb * slideWidth
    this.max = -(this.sliderWidth - window.innerWidth)
    
    this.slides.forEach((slide, index) => {
      slide.style.left = `${index * slideWidth}px`
    })
  }
  
  setPos(e) {
    if (!this.isDragging) return
    this.currentX = this.offX + ((e.clientX - this.onX) * this.opts.speed)
    this.clamp()
  }

  clamp() {
    this.currentX = Math.max(Math.min(this.currentX, this.min), this.max)
  }
  
  run() {
    this.lastX = lerp(this.lastX, this.currentX, this.opts.ease)
    this.lastX = Math.floor(this.lastX * 100) / 100 

    const sd = this.currentX - this.lastX
    const acc = sd / window.innerWidth
    let velo =+ acc
    
    this.sliderInner.style.transform = `translate3d(${this.lastX}px, 0, 0) skewX(${velo * this.opts.velocity}deg)`

    this.requestAnimationFrame()
  }
  
  on(e) {
    this.isDragging = true
    this.onX = e.clientX
    this.slider.classList.add('is-grabbing')
  }
  
  off(e) {
    this.snap()
    this.isDragging = false
    this.offX = this.currentX
    this.slider.classList.remove('is-grabbing')
  }
  
  closest() {
    const numbers = []
    this.slides.forEach((slide, index) => {
      const bounds = slide.getBoundingClientRect()
      const diff = this.currentX - this.lastX
      const center = (bounds.x + diff) + (bounds.width / 2)
      const fromCenter = this.centerX - center
      numbers.push(fromCenter)
    })

    let closest = number(0, numbers)
    closest = numbers[closest]
    
    return {
      closest
    }
  }

  snap() {
    const { closest } = this.closest()
    
    this.currentX = this.currentX + closest
    this.clamp()
  }

  requestAnimationFrame() {
    this.rAF = requestAnimationFrame(this.run)
  }

  cancelAnimationFrame() {
    cancelAnimationFrame(this.rAF)
  }
  
  addEvents() {
    this.run()
    
    this.slider.addEventListener('mousemove', this.setPos, { passive: true })
    this.slider.addEventListener('mousedown', this.on, false)
    this.slider.addEventListener('mouseup', this.off, false)
    
    window.addEventListener('resize', this.resize, false)
  }
  
  removeEvents() {
    this.cancelAnimationFrame(this.rAF)
    
    this.slider.removeEventListener('mousemove', this.setPos, { passive: true })
    this.slider.removeEventListener('mousedown', this.on, false)
    this.slider.removeEventListener('mouseup', this.off, false)
  }
  
  resize() {
    this.setBounds()
  }
  
  destroy() {
    this.removeEvents()
    
    this.opts = {}
  }
  
  init() {
    this.setBounds()
    this.addEvents()
  }
}

const slider = new Slider()
slider.init()
</script>

</main>
@endsection