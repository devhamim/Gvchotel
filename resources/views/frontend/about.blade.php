@extends('frontend.layout.app')
@section('content')

<section class="inner-banner" style="background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important;  background: url('{{ asset('frontend/img/Sub-Banner-3.jpg') }}');">
    <div class="thm-container">
        <h2>About Us</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>About Us</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->

<section class="about-style-one sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-7">
                <div class="about-style-one-content">
                    <div class="title">
                        <h3>Discover Canada’s Most Exquisite Luxury Hotel And Resturant</h3>
                        <div class="line"></div><!-- /.line -->
                    </div><!-- /.title -->
                    <p class="highlighted">Hi. Our inn has been available for more than 5 years. We make the best for every one of our clients.</p><!-- /.highlighted -->
                    <p>Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line digital divide with additional clickthroughs from DevOps immersion along additional clickthroughs from DevOps.</p>
                    <p>Discover Canada’s Pinnacle of Luxury: Where Elegance, Prestige, and Sophistication Converge.</p>
                </div><!-- /.about-style-one-content -->
            </div><!-- /.col-md-7 -->
            <div class="col-md-5 text-right">
                <img src="{{ asset('frontend') }}/img/about-1-1.png" alt="Awesome Image"/>
            </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.about-style-one -->

<section class="about-style-two sec-pad">
    <div class="thm-container">
        <div class="title">
            <h3>Hi. Our inn has been available for more than 20 years. We make the best for every one of our clients.</h3>
        </div><!-- /.title -->
        <div class="row">
            <div class="col-md-6">
                <div class="left-text">
                    <p>Bottom line digital divide with additional clickthroughs from DevOps immersion along additional clickthroughs from DevOps. Nano techn ology immersion along the information highway will close the loop on oop on focusing solely on the bottom line digital divide with additional focusing solely on the bottom line digita.</p>
                </div><!-- /.left-text -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="right-text">
                    <p>Mottom line digital divide with additional clickthroughs from DevOps immersion along additional clickthroughs from DevOps. Nano techno logy immersion along the information highway will close the loop on oop on focusing solely on the bottom line digital divide with additional focusing solely on the bottom line digita.</p>
                </div><!-- /.right-text -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <img src="{{ asset('frontend') }}/img/about-2-1.jpg" alt="Awesome Image"/>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <img src="{{ asset('frontend') }}/img/about-2-2.jpg" alt="Awesome Image"/>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <img src="{{ asset('frontend') }}/img/about-2-3.jpg" alt="Awesome Image"/>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.about-style-two -->

<section class="feature-box-wrapper">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="feature-img-box clearfix">
                    <img src="{{ asset('frontend') }}/img/feature-box-1-1.jpg" class="pull-right" alt="Awesome Image"/>
                </div><!-- /.feature-img-box -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="feature-box-content">
                    <div class="title">
                        <h3>Features</h3>
                        <p>Discover what makes us a five star hotel</p>
                    </div><!-- /.title -->
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-box">
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> In Room Dinning</li>
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> Transport Service</li>
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> Check In : 2.00 pm</li>
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> Check out : 11.00 am</li>
                            </ul><!-- /.list-box -->
                        </div><!-- /.col-sm-6 -->
                        <div class="col-sm-6">
                            <ul class="list-box">
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> Pet Friendly Accomodation</li>
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> Facilities for the Disable</li>
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> Complimentry Breakfast</li>
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> Parking in Hotel</li>
                            </ul><!-- /.list-box -->
                        </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                    <div class="features-option">
                        <div class="single-features-option">
                            <div class="icon-box">
                                <i class="mendoz-suit-icon-wifi"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <p>Free WiFi <br /> Access</p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-features-option -->
                        <div class="single-features-option">
                            <div class="icon-box">
                                <i class="mendoz-suit-icon-dinner"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <p>Restaurant <br /> & Food Service</p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-features-option -->
                        <div class="single-features-option">
                            <div class="icon-box">
                                <i class="mendoz-suit-icon-swimming-pool"></i>
                            </div><!-- /.icon-box -->
                            <div class="text-box">
                                <p>Swimming Pool <br /> Suit </p>
                            </div><!-- /.text-box -->
                        </div><!-- /.single-features-option -->
                    </div><!-- /.features-option -->
                </div><!-- /.feature-box-content -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.feature-box-wrapper -->

<section class="testimonials-style-one">
	<div class="thm-container">
		<div class="title text-center">
			<h3>What our customer says</h3>
			<div class="line"></div><!-- /.line -->
		</div><!-- /.title -->
		<div class="testimonials-carousel owl-theme owl-carousel">
			@foreach ($customerSays as $customer)
			<div class="item">
				<div class="single-testimonials-style-one">
					<img src="{{asset('uploads/customersay')}}/{{$customer->image}}" alt="" />
					<h3>{{$customer->name}}</h3>
					<span class="position">{{$customer->post}}</span>
					<div class="star-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div><!-- /.star-rating -->
					<p>{{ $customer->description }}</p>
				</div><!-- /.single-testimonials-style-one -->
			</div><!-- /.item -->
            @endforeach
		</div><!-- /.testimonials-carousel -->
	</div><!-- /.thm-container -->
</section><!-- /.testimonials-section -->

<section class="video-box-area has-overlay" style="background-image: url({{ asset('frontend') }}/img/video-bg-1-1.jpg);background-position: center center;background-attachment: fixed;">
    <div class="thm-container">
        <div class="title text-center">
            <h3>Relax & Enjoy with us <br /><span>your holidays</span></h3>
            <a href="http://www.youtube.com/watch?v=ehpLLmnhzxs" class="video-btn video-popup hvr-pulse"><i class="mendoz-suit-icon-play-button"></i></a>
        </div><!-- /.title -->
    </div><!-- /.thm-container -->
</section><!-- /.video-box-area -->

@endsection
