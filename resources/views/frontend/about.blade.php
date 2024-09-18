@extends('frontend.layout.app')
@section('content')

<section class="inner-banner" style="background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important;  background: url('{{ asset('frontend/img/Sub-Banner-12.jpg') }}');">
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
                    <p>Welcome to Canada’s most luxurious hotel and Resturants, where elegance meets influence. Frequented by politicians, celebrities, and tastemakers, this iconic hotel and its world-renowned restaurant are the epitome of sophistication. Every moment here is curated with timeless grace, from opulent suites to culinary masterpieces crafted to perfection. It’s more than a destination—it’s where power, prestige, and luxury intertwine in perfect harmony.</p>
                    <p class="highlighted">Discover Canada’s Pinnacle of Luxury: Where Elegance, Prestige, and Sophistication Converge.</p>
                </div>
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
            <h3>Digbypines a luxury resort and restaurant in canada.</h3>
        </div><!-- /.title -->
        <div class="row">
            <style>
                .about-style-two p {
                    margin-bottom: 20px;
                }
            </style>
            <div class="col-md-12">
                <div class="left-text">
                    <p>Welcome to The Summit Lodge & Spa: A Canadian Luxury Retreat</p>
                    <p>Nestled in the breathtaking landscapes of Canada’s most picturesque regions, The Summit Lodge & Spa stands as a pinnacle of luxury and tranquility. Our resort is designed for those who seek an unparalleled escape from the ordinary, where every detail is curated to offer an exceptional experience in both comfort and elegance.</p>
                    <p><strong>Our Story</strong></p>
                    <p>The Summit Lodge & Spa was born from a passion for creating an oasis where nature’s splendor meets sophisticated design. Set against the stunning backdrop of the Canadian Rockies, our resort embodies a commitment to excellence and a dedication to providing an unforgettable retreat. Each corner of our property reflects our deep appreciation for the environment, blending seamlessly with the natural beauty that surrounds us.</p>
                    <p><strong>Accommodations</strong></p>
                    <p>Our accommodations are a harmonious blend of modern luxury and rustic charm. Each room and suite is thoughtfully designed to offer a sanctuary of relaxation and indulgence. Featuring plush bedding, contemporary furnishings, and expansive windows with awe-inspiring views, our lodgings provide an inviting escape. Whether you’re staying in one of our elegant suites or a cozy cabin, you will find an array of upscale amenities including a private balcony, state-of-the-art entertainment systems, and high-speed internet.</p>
                    <p><strong>Dining at The Summit Lodge</strong></p>
                    <p>Dining at The Summit Lodge & Spa is a culinary journey crafted to delight the senses. Our restaurant, The Summit Bistro, offers a refined yet welcoming atmosphere where guests can savor gourmet dishes made from the freshest local ingredients. Our executive chef and culinary team take pride in creating a menu that showcases the rich flavors of Canadian cuisine, with an emphasis on sustainability and seasonal produce.</p>
                    <p>From our signature brunches to elegant dinners, each meal is prepared with meticulous attention to detail. Guests can enjoy a diverse selection of dishes, ranging from artisanal cheeses and charcuterie to expertly prepared seafood and game. Complementing our cuisine is an extensive wine list featuring premium selections from renowned vineyards, both local and international.</p>
                    <p>For a more intimate dining experience, consider reserving a private table in our exclusive wine cellar or indulging in a personalized tasting menu designed to cater to your specific preferences. Our team is dedicated to ensuring that every dining experience is memorable and tailored to your tastes.</p>
                    <p><strong>Wellness and Relaxation</strong></p>
                    <p>At The Summit Lodge & Spa, we believe in nurturing the body, mind, and spirit. Our full-service spa offers a range of treatments designed to rejuvenate and revitalize. From soothing massages and invigorating facials to holistic therapies and aromatherapy sessions, our skilled therapists use only the finest products to ensure a blissful experience.</p>
                    <p>For those seeking to maintain their fitness routine, our state-of-the-art fitness center is equipped with the latest exercise equipment and offers personal training sessions. Additionally, our outdoor pool and hot tub provide a perfect setting for relaxation while enjoying the panoramic views of the surrounding mountains.</p>
                    <p><strong>Activities and Experiences</strong></p>
                    <p>Adventure and relaxation go hand in hand at The Summit Lodge & Spa. Our resort offers a variety of activities to suit every interest. In the winter months, guests can enjoy world-class skiing and snowboarding on pristine slopes, while the warmer months invite exploration of scenic hiking trails, mountain biking, and wildlife watching.</p>
                    <p>Our concierge team is dedicated to crafting personalized experiences, whether you’re looking for guided tours, outdoor adventures, or cultural excursions. We offer a range of bespoke services including private tours, gourmet picnics, and bespoke outdoor activities designed to enrich your stay.</p>
                    <p><strong>Sustainability and Community</strong></p>
                    <p>We are deeply committed to sustainability and strive to minimize our environmental footprint. Our eco-friendly practices include energy-efficient systems, waste reduction programs, and partnerships with local suppliers who share our dedication to environmental stewardship.</p>
                    <p>Furthermore, we believe in giving back to the communities that support us. We actively engage in local initiatives and charitable programs, working to enhance the well-being of the regions in which we operate.</p>
                    <p><strong>Events and Celebrations</strong></p>
                    <p>The Summit Lodge & Spa is also an exceptional venue for special events and celebrations. Whether you’re planning a romantic wedding, a corporate retreat, or a family gathering, our experienced event coordinators will assist in crafting a bespoke experience that meets your every need. Our picturesque setting provides a stunning backdrop for any occasion, complemented by our world-class service and attention to detail.</p>
                    <p><strong>Join Us</strong></p>
                    <p>We invite you to experience the unparalleled luxury and serene beauty of The Summit Lodge & Spa. Whether you’re seeking a peaceful retreat, a culinary adventure, or an exciting outdoor experience, our dedicated team is here to ensure that your stay with us is nothing short of extraordinary. Discover the perfect balance of nature, elegance, and hospitality at The Summit Lodge & Spa—where every moment is a masterpiece.</p>
                </div><!-- /.left-text -->
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
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> Parking in Hotel</li>
                            </ul><!-- /.list-box -->
                        </div><!-- /.col-sm-6 -->
                        <div class="col-sm-6">
                            <ul class="list-box">
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> Pet Friendly Accomodation</li>
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> Facilities for the Disable</li>
                                <li><i class="mendoz-suit-icon-rounded-check-mark"></i> Complimentry Breakfast</li>
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
