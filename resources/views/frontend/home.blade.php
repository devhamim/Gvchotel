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
                            {{-- <div class="typed-strings">
                                <p>Luxuary Resort</p>
                                <p>Delux Rooms</p>
                                <p>King Beds</p>
                            </div> --}}
                            {{-- <div class="typed"></div> --}}
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
						<h3>Discover Canada’s Most <span>Exquisite Luxury Hotel And Resturant </span> alone.</h3>
					</div><!-- /.title -->
					<p>Welcome to Canada’s most luxurious hotel and Resturants, where elegance meets influence. Frequented by politicians, celebrities, and tastemakers, this iconic hotel and its world-renowned restaurant are the epitome of sophistication. Every moment here is curated with timeless grace, from opulent suites to culinary masterpieces crafted to perfection. It’s more than a destination—it’s where power, prestige, and luxury intertwine in perfect harmony.</p>
					<p class="highlight">Discover Canada’s Pinnacle of Luxury: Where Elegance, Prestige, and Sophistication Converge</p>
					<a href="{{route('about_us')}}" class="more-about">More about us</a>
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
				<h3>Our Residence</h3>
				<p>Welcome to Your Dream Residence: A Place Where Every Wish and Desire Comes True!</p>
			</div><!-- /.title -->
			<div class="btn-box pull-right">
				<a href="{{route('room.finds')}}" class="more-btn">View all rooms</a>
			</div><!-- /.btn-box pull-right -->
		</div><!-- /.top-box -->
		<div class="row">
            @foreach ($rooms->take(12) as $room)
                <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 5px">
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
</section>

<section class="service-style-one sec-pad">
	<div class="thm-container">
		<div class="title">
			<h3>Our Services</h3>
			<p>Canadian hotel and restaurant with luxurious rooms, fine dining, and top-notch service in stunning locations.</p>
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
						<p>Luxury resort with serene in-house spa offering relaxing treatments, massages, wellness therapies.</p>
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
						<p>Experience a gourmet arrival breakfast at our luxury resort, designed to start your stay perfectly.</p>
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
						<p>Canadian luxury resort offers complimentary guided tours for enriching local experiences and insights.</p>
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
						<p>Luxury hotel and resort with in-house restaurant serving gourmet meals and exquisite dishes.</p>
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
				{{-- <a href="http://www.youtube.com/watch?v=ehpLLmnhzxs" class="video-btn video-popup hvr-pulse"><i class="mendoz-suit-icon-play-button"></i></a> --}}
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

<section class="blog-style-one home-page-two">
	<div class="thm-container">
		<div class="title text-left style-two">
			<h3>Latest Blogs & Events</h3>
			<p>New normal that has evolved from generation heading towards a streamlined</p>
		</div><!-- /.title -->
		<div class="row">
            @foreach ($blogs->take(3) as $blog)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog-style-two">
                        <div class="img-box">
                            <img src="{{asset('uploads/blog')}}/{{$blog->image}}" alt="Awesome Image"/>
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <div class="cat"><a href="{{route('our.blog.details',$blog->slug)}}">Blog</a></div><!-- /.cat -->
                            <h3 class="black-text"><a href="{{route('our.blog.details',$blog->slug)}}">{{$blog->title}}</a></h3>
                            <a href="{{route('our.blog.details',$blog->slug)}}" class="more">Read More</a>
                        </div><!-- /.text-box -->
                    </div><!-- /.single-blog-style-two -->
                </div><!-- /.col-md-4 -->
            @endforeach
		</div><!-- /.row -->
	</div><!-- /.thm-container -->
</section><!-- /.blog-style-one -->

<section class="sec-pad contact-home-page-two">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<img src="{{ asset('frontend/img/from-image.jpg') }}" alt="">
			</div><!-- /.col-md-6 -->
			<div class="col-md-5 col-sm-12 col-xs-12 pull-right">
				<div class="title">
					<h3>Get In Touch</h3>
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
</section>

<section class="accomodation-style-one sec-pad">
	<div class="thm-container">
		<div class="top-box clearfix">
			<div class="title pull-left">
				<h3>Experience the Beauty and Charm</h3>
				<p>Our Gallery: Experience the Beauty and Charm of Our Resort and Restaurant.</p>
			</div><!-- /.title -->
			<div class="btn-box pull-right">
				<a href="{{route('gallerys')}}" class="more-btn">View all</a>
			</div><!-- /.btn-box pull-right -->
		</div><!-- /.top-box -->
        <section class="sec-pad gallery-page-one gallery-style-two" style="padding: 0">
            <div class="thm-container">
                <div class="row masonary-layout filter-layout" data-filter-class="filter">
                    @foreach ($gallerys->take(9) as $gallery)
                        <div class="col-md-4 col-sm-6 col-xs-12 masonary-item single-filter-item spa rooms">
                            <div class="single-gallery-style-two">
                                <div class="img-box">
                                    <img src="{{ asset('uploads/gallery') }}/{{ $gallery->image }}" alt="Awesome Image"/>
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><h3>{{ $gallery->title }}</h3></a>
                                                <a href="{{ asset('uploads/gallery') }}/{{ $gallery->image }}" class="icon icon-FullScreen img-popup"></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div><!-- /.img-box -->
                            </div><!-- /.single-gallery-style-two -->
                        </div><!-- /.single-filter-item -->
                    @endforeach
                </div>
                <div class="my">

                </div>
            </div><!-- /.thm-container -->
        </section>
	</div><!-- /.thm-container -->
</section>

@endsection
@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif
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
