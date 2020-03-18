@extends('layouts.frontLayout.front_design')

@section('content')

<div id="breadcrumb">
    <div class="container">
        <ul class="ul">
            <li><a href="{{ url('./') }}">Home</a></li>
            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
        </ul>
    </div>
</div>
<section id="kontak">
	<div class="container">
		<h3 class="tag-kontak">Get in touch</h3>

		<div class="row">
			<div class="col-lg-6">
				
				<div class="form-kontak">
					<form id="form-kontak" action="https://usm-alkesmata.com/contact/sendmail" method="post">
						<div class="form-group">
							<input class="form-control" type="text" name="nama" placeholder="Your Name *" required="">
							<p class="error-message" id="err-nama">* Please insert your name.</p>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control" type="email" name="email" placeholder="Email *" required="">
									<p class="error-message" id="err-email">* Please insert your valid email.</p>
								</div>
							</div><!-- col -->

							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control" type="text" name="telp" placeholder="Phone Number">
								</div>
							</div><!-- col -->
						</div><!-- row -->

						<div class="form-group">
							<textarea class="form-control" name="pesan" rows="3" placeholder="Message *" required=""></textarea>
							<p class="error-message" id="err-pesan">* Please insert your message.</p>
						</div>

						<button class="btn btn-success btn-form-kontak" type="submit">
							<i class="fa fa-spinner fa-spin" id="ikon-spin"></i> Send Message
						</button>
					</form>
				</div><!-- form-kontak -->
			</div><!-- col -->

			<div class="col-lg-6">
				<div class="item-info-kontak">
					<div class="ikon-item-kontak">
						<i class="fa fa-map-marker"></i>
					</div><!-- ikon-item-kontak -->

					<div class="body-item-kontak">
						<div class="tag-item-kontak">Address</div>
						<a href="https://g.page/pt--universal-star-multilink?share"><span>Ruko Serenade Blok A/27<br>Jl. Boulevard Gading Serpong<br>Gading Serpong, Tangerang 15810<br>Indonesia</span></a>
					</div><!-- body-item-kontak -->
				</div><!-- item-kontak -->

				<div class="item-info-kontak">
					<div class="ikon-item-kontak">
						<i class="fa fa-phone"></i>
					</div><!-- ikon-item-kontak -->

					<div class="body-item-kontak">
						<div class="tag-item-kontak">Call Center</div>
						<a href="tel:02129001517">(021) 2900 1517 - 19</a>
					</div><!-- body-item-kontak -->
				</div><!-- item-kontak -->

				<div class="item-info-kontak">
					<div class="ikon-item-kontak">
						<i class="fa fa-envelope"></i>
					</div><!-- ikon-item-kontak -->

					<div class="body-item-kontak">
						<div class="tag-item-kontak">Email</div>
						<a href="mailto:info@usm-alkesmata.com">info@usm-alkesmata.com</a>
					</div><!-- body-item-kontak -->
				</div><!-- item-kontak -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- container -->
</section>
<section class="maps">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.07498704577!2d106.62495346977536!3d-6.228255799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbfeb5d66f2b%3A0x7cb59eb4a0ccd8a7!2sPT.+Universal+Star+Multilink!5e0!3m2!1sid!2sid!4v1524042397796" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
</section>
<section id="contact">
	<div class="wrap-contact">
		<div class="container">
			<h1 class="title-section text-white">We are ready to help you</h1>
			<div class="wrap-item-kontak">
				<div class="" style="">
					<div class="" style="">
						<div class="patner-slider row">
							<div class="slide col-md-4">
								<div class="item-kontak">
									<h3>Customer Service 3</h3>
									{{--@if()--}}
										<p><i class="fa fa-circle" style="color: limegreen"></i>&nbsp;Online</p>
									{{--@elseif()--}}
										<p><i class="fa fa-circle" style="color: red"></i>&nbsp;Not Available</p>
									{{--@elseif()--}}
										<p><i class="fa fa-circle" style="color: grey"></i>&nbsp;Offline</p>
									{{--@endif--}}
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
							<div class="slide col-md-4">
								<div class="item-kontak">
									<h3>Customer Service 3</h3>
									{{--@if()--}}
										<p><i class="fa fa-circle" style="color: limegreen"></i>&nbsp;Online</p>
									{{--@elseif()--}}
										<p><i class="fa fa-circle" style="color: red"></i>&nbsp;Not Available</p>
									{{--@elseif()--}}
										<p><i class="fa fa-circle" style="color: grey"></i>&nbsp;Offline</p>
									{{--@endif--}}
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
							<div class="slide col-md-4">
								<div class="item-kontak">
									<h3>Customer Service 3</h3>
									{{--@if()--}}
										<p><i class="fa fa-circle" style="color: limegreen"></i>&nbsp;Online</p>
									{{--@elseif()--}}
										<p><i class="fa fa-circle" style="color: red"></i>&nbsp;Not Available</p>
									{{--@elseif()--}}
										<p><i class="fa fa-circle" style="color: grey"></i>&nbsp;Offline</p>
									{{--@endif--}}
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
					</div>
					</div>
				</div>				
			<div class="owl-controls"><div class="owl-nav"><div class="cs-prev" style="display: none;">prev</div><div class="cs-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div><!-- wrap-item-kontak -->
		</div><!-- container -->
	</div><!-- wrap-kontak -->
</section>

@endsection