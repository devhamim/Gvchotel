@extends('frontend.layout.app')

@section('content')

<section class="inner-banner" style="background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important;  background: url('{{ asset('frontend/img/Sub-Banner-7.jpg') }}');">
    <div class="thm-container">
        <h2>Services</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Services</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->

<section class="service-style-four sec-pad">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-service-style-four">
					<div class="img-box">
						<img src="{{ asset('frontend') }}/img/service-1-1.jpg" alt="Awesome Image"/>
						<div class="overlay">
							<div class="box">
								<div class="content">
									<a href="#"><h3>Spa & Wellness</h3></a>
								</div><!-- /.content -->
							</div><!-- /.box -->
						</div><!-- /.overlay -->
					</div><!-- /.img-box -->
				</div><!-- /.single-service-style-four -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-service-style-four">
					<div class="img-box">
						<img src="{{ asset('frontend') }}/img/service-1-2.jpg" alt="Awesome Image"/>
						<div class="overlay">
							<div class="box">
								<div class="content">
									<a href="#"><h3>Swimming pool</h3></a>
								</div><!-- /.content -->
							</div><!-- /.box -->
						</div><!-- /.overlay -->
					</div><!-- /.img-box -->
				</div><!-- /.single-service-style-four -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-service-style-four">
					<div class="img-box">
						<img src="{{ asset('frontend') }}/img/service-1-3.jpg" alt="Awesome Image"/>
						<div class="overlay">
							<div class="box">
								<div class="content">
									<a href="#"><h3>Inhouse Restaurant</h3></a>
								</div><!-- /.content -->
							</div><!-- /.box -->
						</div><!-- /.overlay -->
					</div><!-- /.img-box -->
				</div><!-- /.single-service-style-four -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.service-style-four -->

<section class="service-style-five sec-pad">
	<div class="thm-container">
		<div class="title">
			<h3>What we offer to our customers</h3>
			<div class="line"></div><!-- /.line -->
			<p>We offer elegant rooms, gourmet dining, exceptional service, relaxing spa treatments, and exclusive experiences in stunning, picturesque locations</p>
		</div><!-- /.title -->
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-five">
					<i class="mendoz-suit-icon-taxi"></i>
					<a href="#"><h3>Car Rental</h3></a>
					<p>Luxury hotel offers premium car rental services for seamless, stylish travel experiences.</p>
				</div><!-- /.single-service-style-five -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-five">
					<i class="mendoz-suit-icon-swimming-pool"></i>
					<a href="#"><h3>Swimming Pool</h3></a>
					<p>Luxury hotel with an elegant swimming pool, stunning views, and premium amenities.</p>
				</div><!-- /.single-service-style-five -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-five">
					<i class="mendoz-suit-icon-wifi"></i>
					<a href="#"><h3>Free WiFi</h3></a>
					<p>Enjoy complimentary high-speed Wi-Fi throughout the hotel, including suites, dining, and lounges.</p>
				</div><!-- /.single-service-style-five -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-five">
					<i class="mendoz-suit-icon-bed"></i>
					<a href="#"><h3>King Beds</h3></a>
					<p>Canadian luxury hotel features spacious rooms with plush king beds for ultimate relaxation and comfort.</p>
				</div><!-- /.single-service-style-five -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-five">
					<i class="mendoz-suit-icon-fashion"></i>
					<a href="#"><h3>Laundry Service</h3></a>
					<p>Convenient on-demand laundry service for all guests, ensuring effortless comfort.</p>
				</div><!-- /.single-service-style-five -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-five">
					<i class="mendoz-suit-icon-breakfast"></i>
					<a href="#"><h3>Welcome Drink</h3></a>
					<p>Enjoy a complimentary welcome drink upon arrival, crafted to refresh and delight every guest.</p>
				</div><!-- /.single-service-style-five -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-five">
					<i class="mendoz-suit-icon-smoke"></i>
					<a href="#"><h3>Smoking Free</h3></a>
					<p>Enjoy a serene, smoke-free ambiance throughout the hotel, ensuring fresh air and tranquility.</p>
				</div><!-- /.single-service-style-five -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-five">
					<i class="mendoz-suit-icon-architecture-and-city"></i>
					<a href="#"><h3>Tour Guide</h3></a>
					<p>Expert tour guides available, offering personalized journeys through the region’s finest attractions.</p>
				</div><!-- /.single-service-style-five -->
			</div><!-- /.col-md-3 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.service-style-five -->

<section class="video-box-area" style="background-image: url({{ asset('frontend') }}/img/video-bg-1-4.jpg);background-position: center center; background-size: cover;background-attachment: fixed;">
	<div class="thm-container">
		<div class="title text-center">
			<h3>Relax & Enjoy with us <br /><span>your holidays</span></h3>
			{{-- <a href="http://www.youtube.com/watch?v=ehpLLmnhzxs" class="video-btn video-popup hvr-pulse"><i class="mendoz-suit-icon-play-button"></i></a> --}}
		</div><!-- /.title -->
	</div><!-- /.thm-container -->
</section><!-- /.video-box-area -->

<section class="service-style-six sec-pad">
	<div class="thm-container">
		<div class="title">
			<h3>Additonal Features</h3>
			<p>Discover Our Resort and Restaurant's Premium Additional Features and Exclusive Amenities for an Unforgettable Experience.</p>
		</div><!-- /.title -->
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-six">
					<img src="{{ asset('frontend') }}/img/service-icon-1.png" alt="Awesome Image"/>
					<a href="#"><h3>Photographer</h3></a>
					<p>Professional photographer services available for capturing your special moments.</p>
				</div><!-- /.single-service-style-six -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-six wooden-bg">
					<img src="{{ asset('frontend') }}/img/service-icon-2.png" alt="Awesome Image"/>
					<a href="#"><h3>Trained Driver</h3></a>
					<p>Experienced, trained drivers available for convenient and safe transportation during your stay.</p>
				</div><!-- /.single-service-style-six -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-six">
					<img src="{{ asset('frontend') }}/img/service-icon-3.png" alt="Awesome Image"/>
					<a href="#"><h3>Cloth Cleaning</h3></a>
					<p>Cloth cleaning service provided to keep your garments fresh and spotless throughout your stay.</p>
				</div><!-- /.single-service-style-six -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-six black-bg">
					<img src="{{ asset('frontend') }}/img/service-icon-4.png" alt="Awesome Image"/>
					<a href="#"><h3>Coffee Maker</h3></a>
					<p>Enjoy in-room coffee makers for fresh, gourmet coffee whenever you need during your stay.</p>
				</div><!-- /.single-service-style-six -->
			</div><!-- /.col-md-3 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.service-style-six -->

@endsection
