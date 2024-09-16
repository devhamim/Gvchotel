@extends('frontend.layout.app')

@section('content')
<section class="banner-style-two" style="background: url('{{ asset('uploads/banner') }}/{{ $banners->first()->image }}')">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-8">
				<div class="banner-content">
					<span class="tag-line">{{ $banners->first()->description }}</span>
					<div class="title-text">Comfort
						<div class="type-wrap">
                            <div class="typed-strings">
                                <p>Luxuary Resort</p>
                                <p>Delux Rooms</p>
                                <p>King Beds</p>
                            </div>
                            <div class="typed"></div>
                        </div>
						<br />{{ $banners->first()->title }} </div>
					<a href="{{route('room.finds')}}" class="banner-btn">Book today now</a>
				</div><!-- /.banner-content -->
			</div><!-- /.col-md-8 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<form action="{{route('search.rooms')}}" method="POST" class="banner-booking-form">
                    @csrf
					<div class="title">
						<h3>Check Availability</h3>
						<div class="line"></div><!-- /.line -->
					</div><!-- /.title -->
					<div class="form-box checkin">
						<i class="fa fa-calendar"></i>
						<input type="text" placeholder="Arival Date" class="checkin-input" name="check_in" required />
                        @error('check_in')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
					</div><!-- /.form-box -->
					<div class="form-box checkout">
						<i class="fa fa-calendar"></i>
						<input type="text" class="checkout-input" placeholder="Departure Date" name="check_out" required />
                        @error('check_out')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
					</div><!-- /.form-box -->
					<div class="form-box">
						<select name="rooms" id="adult" class="selectpicker">
							<option value="1">1 Rooms</option>
                            <option value="2">2 Rooms</option>
                            <option value="3">3 Rooms</option>
                            <option value="4">4 Rooms</option>
                            <option value="5">5 Rooms</option>
						</select>
					</div><!-- /.form-box -->
					<div class="form-box">
						<select name="guests" id="child" class="selectpicker">
							@foreach ($rooms_gest->take(4) as $room)
                                <option value="{{$room->id}}">{{$room->adult}} Adult, {{$room->childreen}}  Child</option>
                            @endforeach
						</select>
					</div><!-- /.form-box -->
					<button type="submit">check availability</button>
				</form><!-- /.banner-booking-form -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.banner-style-two -->

<section class="about-style-three sec-pad">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-8">
				<div class="about-content">
					<div class="title">
						<h3>A self-described luxury temporary residence, the <span>Mendoz Suits</span> alone.</h3>
					</div><!-- /.title -->
					<p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined. Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined.</p>
					<p class="highlight">Bring to the table win-win survival strategies to ensure proactive domination at the end of the day</p>
					<a href="#" class="more-about">More about us</a>
				</div><!-- /.about-content -->
			</div><!-- /.col-md-8 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<img src="{{asset('frontend')}}/img/about-2-1.png" alt="Awesome Image"/>
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.about-style-three -->

<section class="accomodation-style-one sec-pad">
	<div class="thm-container">
		<div class="top-box clearfix">
			<div class="title pull-left">
				<h3>Our Accomodation</h3>
				<p>Pick a room that best suits your choice and budget</p>
			</div><!-- /.title -->
			<div class="btn-box pull-right">
				<a href="#" class="more-btn">View all rooms</a>
			</div><!-- /.btn-box pull-right -->
		</div><!-- /.top-box -->
		<div class="row">
            @foreach ($rooms->take(12) as $room)
                <div class="col-md-3 col-sm-6 col-xs-12" style="padding: 5px">
                    <div class="single-accomodation-style-one">
                        <div class="img-box">
                            <img src="{{asset('uploads/rooms')}}/{{$room->image}}" alt="Awesome Image"/>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <h3>{{$room->title}}</h3>
                                        <a href="{{route('room.details',$room->slug)}}">Starting from ${{$room->price}}</a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.overlay -->
                            <div class="hover-content">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{route('room.details',$room->slug)}}"><h3>{{$room->title}}</h3></a>
                                        <a href="{{route('room.details',$room->slug)}}" class="price">Starting from ${{$room->price}}</a>
                                        <a href="{{route('room.details',$room->slug)}}" class="view-details">View Details</a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.hover-content -->
                        </div><!-- /.img-box -->
                    </div><!-- /.single-accomodation-style-one -->
                </div><!-- /.col-md-3 -->
            @endforeach
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.accomodation-style-one -->

<section class="service-style-one sec-pad">
	<div class="thm-container">
		<div class="title">
			<h3>Our Services</h3>
			<p>New normal that has evolved from generation heading towards a streamlined.</p>
			<div class="line"></div><!-- /.line -->
		</div><!-- /.title -->
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-one">
					<div class="icon-box">
						<i class="mendoz-suit-icon-breakfast"></i>
					</div><!-- /.icon-box -->
					<div class="text-box">
						<h3>Luxuary Spa</h3>
						<p>New normal that has evolved from generation heading of towards a streaml.</p>
					</div><!-- /.text-box -->
				</div><!-- /.single-service-style-one -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-one">
					<div class="icon-box">
						<i class="mendoz-suit-icon-food-and-restaurant"></i>
					</div><!-- /.icon-box -->
					<div class="text-box">
						<h3>Arrival Breakfast</h3>
						<p>New normal that has evolved from generation heading of towards a streaml.</p>
					</div><!-- /.text-box -->
				</div><!-- /.single-service-style-one -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-one">
					<div class="icon-box">
						<i class="mendoz-suit-icon-architecture-and-city"></i>
					</div><!-- /.icon-box -->
					<div class="text-box">
						<h3>Tour Guide</h3>
						<p>New normal that has evolved from generation heading of towards a streaml.</p>
					</div><!-- /.text-box -->
				</div><!-- /.single-service-style-one -->
			</div><!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single-service-style-one">
					<div class="icon-box">
						<i class="mendoz-suit-icon-dinner"></i>
					</div><!-- /.icon-box -->
					<div class="text-box">
						<h3>Inhouse Restaurant</h3>
						<p>New normal that has evolved from generation heading of towards a streaml.</p>
					</div><!-- /.text-box -->
				</div><!-- /.single-service-style-one -->
			</div><!-- /.col-md-3 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.service-style-one -->

<section class="video-box-area style-two home-two">
	<div class="inner">
		<div class="thm-container">
			<div class="title text-left">
				<h3>Relax & Enjoy with us <br /><span>your holidays</span></h3>
				<a href="http://www.youtube.com/watch?v=ehpLLmnhzxs" class="video-btn video-popup hvr-pulse"><i class="mendoz-suit-icon-play-button"></i></a>
			</div><!-- /.title -->
		</div><!-- /.thm-container -->
	</div><!-- /.inner -->
</section><!-- /.video-box-area -->

<section class="testimonials-style-one">
	<div class="thm-container">
		<div class="title text-center">
			<h3>What our customer says</h3>
			<div class="line"></div><!-- /.line -->
		</div><!-- /.title -->
		<div class="testimonials-carousel owl-theme owl-carousel">
			<div class="item">
				<div class="single-testimonials-style-one">
					<img src="{{asset('frontend')}}/img/testi-1-1.png" alt="" />
					<h3>Ira Mulanax</h3>
					<span class="position">Melborne / Australia</span>
					<div class="star-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div><!-- /.star-rating -->
					<p>Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p>
				</div><!-- /.single-testimonials-style-one -->
			</div><!-- /.item -->
			<div class="item">
				<div class="single-testimonials-style-one">
					<img src="{{asset('frontend')}}/img/testi-1-2.png" alt="" />
					<h3>Lilli Knippers</h3>
					<span class="position">Melborne / Australia</span>
					<div class="star-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div><!-- /.star-rating -->
					<p>Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p>
				</div><!-- /.single-testimonials-style-one -->
			</div><!-- /.item -->
			<div class="item">
				<div class="single-testimonials-style-one">
					<img src="{{asset('frontend')}}/img/testi-1-3.png" alt="" />
					<h3>Deedra Yeiser</h3>
					<span class="position">Melborne / Australia</span>
					<div class="star-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div><!-- /.star-rating -->
					<p>Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p>
				</div><!-- /.single-testimonials-style-one -->
			</div><!-- /.item -->
			<div class="item">
				<div class="single-testimonials-style-one">
					<img src="{{asset('frontend')}}/img/testi-1-1.png" alt="" />
					<h3>Dallas Chapdelaine</h3>
					<span class="position">Melborne / Australia</span>
					<div class="star-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div><!-- /.star-rating -->
					<p>Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p>
				</div><!-- /.single-testimonials-style-one -->
			</div><!-- /.item -->
			<div class="item">
				<div class="single-testimonials-style-one">
					<img src="{{asset('frontend')}}/img/testi-1-2.png" alt="" />
					<h3>Alonso Steeves</h3>
					<span class="position">Melborne / Australia</span>
					<div class="star-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div><!-- /.star-rating -->
					<p>Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p>
				</div><!-- /.single-testimonials-style-one -->
			</div><!-- /.item -->
			<div class="item">
				<div class="single-testimonials-style-one">
					<img src="{{asset('frontend')}}/img/testi-1-3.png" alt="" />
					<h3>Layne Kuns</h3>
					<span class="position">Melborne / Australia</span>
					<div class="star-rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div><!-- /.star-rating -->
					<p>Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing.</p>
				</div><!-- /.single-testimonials-style-one -->
			</div><!-- /.item -->
		</div><!-- /.testimonials-carousel -->
	</div><!-- /.thm-container -->
</section><!-- /.testimonials-section -->

<section class="blog-style-one home-page-two">
	<div class="thm-container">
		<div class="title text-left style-two">
			<h3>Latest News & Events</h3>
			<p>New normal that has evolved from generation heading towards a streamlined</p>
		</div><!-- /.title -->
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-blog-style-two">
					<div class="img-box">
						<img src="{{asset('frontend')}}/img/blog-h2-1-1.jpg" alt="Awesome Image"/>
					</div><!-- /.img-box -->
					<div class="text-box">
						<div class="cat"><a href="#">News</a></div><!-- /.cat -->
						<h3 class="black-text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely</h3>
						<a href="#" class="more">Read More</a>
					</div><!-- /.text-box -->
				</div><!-- /.single-blog-style-two -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-blog-style-two">
					<div class="text-box">
						<div class="cat"><a href="#">News</a></div><!-- /.cat -->
						<h3 class="black-text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely</h3>
						<a href="#" class="more">Read More</a>
					</div><!-- /.text-box -->
					<div class="img-box">
						<img src="{{asset('frontend')}}/img/blog-h2-1-2.jpg" alt="Awesome Image"/>
					</div><!-- /.img-box -->
				</div><!-- /.single-blog-style-two -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="single-blog-style-two">
					<div class="img-box">
						<img src="{{asset('frontend')}}/img/blog-h2-1-3.jpg" alt="Awesome Image"/>
					</div><!-- /.img-box -->
					<div class="text-box">
						<div class="cat"><a href="#">News</a></div><!-- /.cat -->
						<h3 class="black-text">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely</h3>
						<a href="#" class="more">Read More</a>
					</div><!-- /.text-box -->
				</div><!-- /.single-blog-style-two -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.blog-style-one -->

<section class="sec-pad contact-home-page-two">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="title">
					<h3>Our Location</h3>
				</div><!-- /.title -->
				<div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7928.863091545279!2d-75.79852102230426!3d45.36341546443504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce01237874e761%3A0xc3cbb1c760bfce5f!2sThe%20Beachconers%20Microcreamery!5e0!3m2!1sen!2sbd!4v1725960618784!5m2!1sen!2sbd" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				 </div>
			</div><!-- /.col-md-6 -->
			<div class="col-md-5 col-sm-12 col-xs-12 pull-right">
				<div class="title">
					<h3>Drop a Message</h3>
				</div><!-- /.title -->
				<form action="{{ route('customerMessage.store') }}" method="POST" class="contact-home-two">
                    @csrf
                    <input type="text" name="name" placeholder="Enter Your Name" required="">
					<input type="number" name="phone" placeholder="Enter Your Phone" required="">
                    <input type="email" name="email" placeholder="Enter Your Email" required="">
                    <input type="text" name="subject" placeholder="Enter Your Subject" required="">
					<textarea name="message" id="Message" placeholder="Write Message"></textarea>
					<button type="submit">submit now</button>
				</form><!-- /.contact-home-two -->
			</div><!-- /.col-md-5 -->
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.sec-pad contact-home-page-two -->

<section class="instafeed-gallery sec-pad">
	<div class="thm-container">
		<div class="title">
			<h3>Instagram Feed</h3>
			<div class="line"></div><!-- /.line -->
		</div><!-- /.title -->
		<div class="instafeed-slider-wrapper">
			<div class="instafeed-slider bx-slider">
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-1.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-1.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-2.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-2.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-3.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-3.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-4.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-4.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-5.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-5.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-6.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-6.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-1.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-1.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-2.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-2.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-3.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-3.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-4.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-4.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-5.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-5.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-6.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-6.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-1.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-1.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-2.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-2.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-3.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-3.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-4.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-4.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-5.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-5.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
				<div class="slide single-instafeed-slide">
					<a href="{{asset('frontend')}}/img/insta-feed-1-6.jpg" class="img-popup"><img src="{{asset('frontend')}}/img/insta-feed-1-6.jpg" alt="Awesome Image"/></a>
				</div><!-- /.slide -->
			</div><!-- /.instafeed-slider -->
			<div class="text-box"><span>Gallery</span></div><!-- /.text-box -->
		</div><!-- /.instafeed-slider-wrapper -->
	</div><!-- /.thm-container -->
</section><!-- /.instafeed-gallery -->

@endsection

<script>
    $(document).ready(function () {
        $('#search_input').submit(function (e) {
            e.preventDefault();

            var check_in = $('.check_in').val();
            var check_out = $('.check_out').val();
            var rooms = $('.rooms').val();
            var guests = $('.guests').val();

            var link = "{{ route('search.rooms') }}" + "?check_in=" + check_in + "&check_out=" + check_out + "&rooms=" + rooms + "&guests=" + guests;
            window.location.href = link;
        });
    });
    </script>
