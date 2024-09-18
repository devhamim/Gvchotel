<section class="footer-signup">
	<div class="thm-container clearfix">
        <div class="row">
            <div class="col-lg-3">
                <img src="{{ asset('frontend/img/f1.png') }}" alt="">
            </div>
            <div class="col-lg-3">
                <img src="{{ asset('frontend/img/f2.png') }}" alt="">
            </div>
            <div class="col-lg-3">
                <img src="{{ asset('frontend/img/f3.png') }}" alt="">
            </div>
            <div class="col-lg-3">
                <img src="{{ asset('frontend/img/f4.png') }}" alt="">
            </div>
        </div>
	</div><!-- /.thm-container -->
</section><!-- /.footer-signup -->


<footer class="footer">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="footer-widget about-widget">
                    @if ($setting->first()->footer_logo != null)
                            <a href="{{ url('/') }}"><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt="Footer Logo"/></a>
                        @endif
					@if ( $setting->first()->about != null)
                        <p>{{ $setting->first()->about }}</p>
                    @endif
					<div class="social">
						<a href="{{ $setting->first()->twitter }}" class="fa fa-twitter"></a>
						<a href="{{ $setting->first()->facebook }}" class="fa fa-facebook-square"></a>
                        <a href="{{ $setting->first()->linkedin }}" class="fa fa-linkedin-square"></a>
                        <a href="{{ $setting->first()->youtube }}" class="fa fa-youtube"></a>
					</div><!-- /.social -->
				</div><!-- /.footer-widget -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-2">
				<div class="footer-widget links-widget quick-links">
					<div class="title">
						<h3>About Us</h3>
						<div class="line"></div><!-- /.line -->
					</div><!-- /.title -->
					<ul class="links-list">
						<li><a href="{{route('about_us')}}">About</a></li>
                        <li><a href="{{route('career')}}">Career</a></li>
                        <li><a href="{{ route('our.blog') }}">Blog</a></li>
                        <li><a href="{{route('contect')}}">Contact</a></li>
                        <li><a href="{{ route('our.privacy.policy') }}">Privacy Policy</a></li>
					</ul><!-- /.links-list -->
				</div><!-- /.footer-widget -->
			</div><!-- /.col-md-2 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer-widget links-widget services-links">
					<div class="title">
						<h3>Our Services</h3>
						<div class="line"></div><!-- /.line -->
					</div><!-- /.title -->
					<ul class="links-list">
						<li><a href="{{route('room.finds')}}">Room</a></li>
						<li><a href="{{route('services')}}">Service</a></li>
						<li><a href="{{route('restaurant')}}">Restaurant</a></li>
						<li><a href="{{route('gallerys')}}">Gallery</a></li>
					</ul><!-- /.links-list -->
				</div><!-- /.footer-widget -->
			</div><!-- /.col-md-2 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="footer-widget contact-widget">
					<div class="title">
						<h3>Get in Touch</h3>
						<div class="line"></div><!-- /.line -->
					</div><!-- /.title -->

                        @if ($setting->first()->address != null)
                            <p><i class="fa fa-map-marker"></i>{{ $setting->first()->address }}</p>
                        @endif
                        @if ($setting->first()->number != null)
                            <p class="phone"><i class="fa fa-phone"></i>{{ $setting->first()->number }}</p>
                        @endif
                        @if ($setting->first()->email != null)
                            <p><i class="fa fa-envelope-o"></i>{{ $setting->first()->email }}</p>
                        @endif
				</div><!-- /.footer-widget -->
			</div><!-- /.col-md-3 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</footer><!-- /.footer -->


<div class="footer-bottom">
	<div class="thm-container clearfix">
		<div class="left-text pull-left">
			<p>Copyright © {{ $setting->first()->footer }} </p>
		</div><!-- /.left-text -->
		<div class="right-text pull-right">

		</div><!-- /.right-text -->
	</div><!-- /.thm-container -->
</div><!-- /.footer-bottom -->
