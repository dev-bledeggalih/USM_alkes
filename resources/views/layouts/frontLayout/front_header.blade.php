<?php 
use App\Http\Controllers\Controller;
use App\Product;
use App\Cart;


// $pages = Controller::viewPages();
$mainCategories = Controller::mainCategories();
$cartCount = Product::cartCount();
$userCart = Controller::showHead();



?>

<style type="text/css">
	
#search-box {
  display: none;
  padding: 10px 0;
  background: #F4F4F4; }
  #search-box .input-group {
    padding-left: 320px; }
  #search-box .form-control {
    width: calc(100% - 320px);
    border-color: #FFF;
    background: #FFF;
    font-family: "Open Sans";
    font-size: 0.875rem; }
    #search-box .form-control:focus {
      box-shadow: none; }
  #search-box .btn {
    background: #FFF; }
    #search-box .btn:focus {
      box-shadow: none; }

</style>



<header>
	<div class="wrap-header">
		<div class="header-top">
			<div class="header-top__text">
				<div class="container">
					<p class="mb-0">Ophthalmic &amp; Hospital Supply Company</p>
					<div class="header-top__info">
						<ul class="ul">
							<li>
								<a target="_blank" href="https://www.facebook.com/USM.Alkesmata/?view_public_for=255221475171743"><i class="fa fa-facebook icon-facebook with-shadow"></i></a>
							</li>
							<li>
								<a target="_blank" href="https://twitter.com/USM_Alkesmata"><i class="fa fa-twitter icon-twitter with-shadow"></i></a>
							</li>
							<li>
								<a target="_blank" href="https://www.instagram.com/usm.alkesmata/"><i class="fa fa-instagram icon-instagram with-shadow"></i></a>
							</li>
							<li>
								<a href="tel:02129001517">
									<i class="fa fa-phone"></i> <span>(021) 2900 1517 - 19</span>
								</a>
							</li>
							<li>
								<a href="mailto:info@usm-alkesmata.com">
									<i class="fa fa-envelope"></i> <span>info@usm-alkesmata.com</span>
								</a>
							</li>
						</ul>
						<ul class="ul header-info-right">
							<li class="new-style"><a href="https://usm-alkesmata.com/login" title="Have an account?"><span>Sign In</span></a></li>
							<li class="new-style"><a href="https://usm-alkesmata.com/register" title="Not member yet?">Sign Up</a></li>
							<li class="m-btn-cart">
								<a href="https://usm-alkesmata.com/inquiry">
									<i class="fa fa-shopping-bag"></i>
									<div id="countCarts"></div>
								</a>
							</li>
							<li class="m-btn-serach">
								<a id="m-collapse-search" href="#"><i class="fa fa-search"></i></a>
							</li>
						</ul>
					</div>
				</div><!-- container -->
			</div><!-- header-top__text -->
		</div><!-- header-top -->

		<div class="header">
			<div class="container">
				<div class="logo">
					<a href="{{ url('./') }}">
						<img src="https://usm-alkesmata.com/assets/images/logo-usm-3.png" alt="Universal Star Multilink">
					</a>
				</div><!-- logo -->

				<div class="ikon-menu">
					<span></span>
				</div><!-- ikon-menu -->

				<nav class="menu-header">
					<h3>Navigation</h3>
					
					<ul class="ul">
						<li>
							<a href="https://usm-alkesmata.com/">Home</a>
						</li>
						<li>
							<a href="https://usm-alkesmata.com/about">About Us</a>
						</li>
						<li>
							<a href="https://usm-alkesmata.com/product">Product</a>
						</li>
						<li>
							<a href="https://usm-alkesmata.com/download">Download</a>
						</li>
						<li>
							<a href="https://usm-alkesmata.com/inquiry">
								Inquiry
								<div id="countCart">
								</div>
							</a>
						</li>
						<li>
							<a href="https://usm-alkesmata.com/contact">Contact Us</a>
						</li>
						<li class="menu-991">
							<a href="https://usm-alkesmata.com/login">Sign In</a>
						</li>
						<li class="menu-991">
							<a href="https://usm-alkesmata.com/register">Sign Up</a>
						</li>
						<li>
							<a id="collapse-search" href="#"><i class="fa fa-search"></i></a>
						</li>
					</ul>
				</nav>
			</div><!-- container -->
		</div><!-- header -->

		<div id="search-box">
			<div class="container">
				<form action="https://usm-alkesmata.com/product/search" method="get">
					<div class="input-group">
						<input type="text" class="form-control form-control-sm" name="q" placeholder="Search here">
						<div class="input-group-append">
							<button class="btn btn-sm" type="submit"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
			</div><!-- container -->
		</div><!-- serach-box -->
	</div><!-- wrap-header -->
</header>