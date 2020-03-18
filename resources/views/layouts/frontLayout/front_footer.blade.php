<?php 
use App\Http\Controllers\Controller;
use App\Product;
$mainCategories =  Controller::mainCategories();
$cartCount = Product::cartCount();
?>



<div class="">
<footer class="footerMain page-footer font-small">
	<div class="footer-top">
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-lg-3">
					<div class="footer-logo">
						<img src="https://usm-alkesmata.com/assets/images/logo-usm-bottom.png" alt="">
					</div>
				</div><!-- col -->

				<div class="col-lg-2">
					<div class="footer-item">
						<h3 class="with-border">Information</h3>

						<ul class="ul footer-menu">
							<li><a href="https://usm-alkesmata.com/">Home</a></li>
							<li><a href="https://usm-alkesmata.com/about">About Us</a></li>
							<li><a href="https://usm-alkesmata.com/product">Product</a></li>
							<li><a href="https://usm-alkesmata.com/download">Download</a></li>
							<li><a href="https://usm-alkesmata.com/contact">Contact Us</a></li>
						</ul>
					</div>
				</div><!-- col -->

				<div class="col-lg-3">
					<div class="footer-item">
						<h3 class="with-border">Contact Us</h3>

						<div class="footer-kontak">
							<!-- <span class="fk-big">Call Us</span> -->
							<h2>(021) 2900 1517 - 19</h2>
							<span>Fax : <a href="fax:02129001419">(021) 2900 1419</a></span>
							<span>Email : <a href="mailto:info@usm-alkesmata.com">info@usm-alkesmata.com</a></span>
							<span>Senin - Jumat 08.30 - 17.30</span>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="footer-item">
						<h3 class="with-border">Follow Us</h3>

						<ul class="ul footer-sosmed">
							<li><a target="_blank" class="fb" href="https://www.facebook.com/USM.Alkesmata/?view_public_for=255221475171743"><i class="fa fa-facebook"></i></a></li>
							<li><a target="_blank" class="twt" href="https://twitter.com/USM_Alkesmata"><i class="fa fa-twitter"></i></a></li>
							<li><a target="_blank" class="ig" href="https://www.instagram.com/usm.alkesmata/"><i class="fa fa-instagram"></i></a></li>
						</ul>

						<h3>Mobile Application</h3>

						<ul class="ul footer-app">
							<li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.usm_alkesmata.aplikasiuniversalstarmultilink"><img src="https://usm-alkesmata.com/assets/images/gp.png" alt=""></a></li>
							<li><a href="#"><img src="https://usm-alkesmata.com/assets/images/as.png" alt=""></a></li>					
						</ul>
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- footer-top -->

	<div class="copyright">
		<div class="container">
			<p class="mb-0">Copyright © {{ date('Y') }} Universal Star Multilink - Designed by <a href="https://www.https://lawavedesign.com/" target="_blank">LawaveDesign.com</a> and Re-maping by <a href="https://www.protecsoft.com/" target="_blank">Protecsoft</a> - <a href="{{ url('') }}">Disclaimer</a></p>
		</div>
	</div>
</footer>
</div>