@extends('frontend.layout.app')
@section('content')

<section class="inner-banner" style="background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important;  background: url('{{ asset('frontend/img/Sub-Banner-11.jpg') }}');">
    <div class="thm-container">
        <h2>Restaurant</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Restaurant</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->

<section class="about-resturants sec-pad pb0">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-8">
                <div class="img-box">
                    <img src="{{ asset('frontend') }}/img/about-resturant.jpg" alt="Awesome Image"/>
                </div><!-- /.img-box -->
            </div><!-- /.col-md-8 -->
            <div class="col-md-4">
                <div class="resturant-content">
                    <div class="title">
                        <h3>Welcome to <br /> <span>Mendoz Restaurant</span></h3>
                        <div class="line"></div><!-- /.line -->
                    </div><!-- /.title -->
                    <p class="highlight">Rich tradition of personal service</p><!-- /.highlight -->
                    <p>Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line digital divide with additional clickthroughs from DevOps immersion along additional clickthroughs from DevOps.</p>
                    <div class="contact-box">
                        <p class="contact-text">To reserve our Restaurant</p>
                        <a href="#book-table" class="make-online">or make it online</a><!-- /.make-online -->
                    </div><!-- /.contact-box -->
                </div><!-- /.resturant-content -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.about-resturants -->

<section class="sec-pad main-dish">
    <div class="thm-container">
        <div class="title">
            <h3>Our Main Dishes</h3>
            <div class="line"></div><!-- /.line -->
        </div><!-- /.title -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-main-dish">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-menu-1-1.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <a href="#"><h3>Gravy veg dish</h3></a>
                        <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod ipsum dolor sit amet</p>
                    </div><!-- /.text-box -->
                </div><!-- /.single-main-dish -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-main-dish">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-menu-1-2.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <a href="#"><h3>Snacks rolls</h3></a>
                        <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod ipsum dolor sit amet</p>
                    </div><!-- /.text-box -->
                </div><!-- /.single-main-dish -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-main-dish">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-menu-1-3.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <a href="#"><h3>Nonveg item</h3></a>
                        <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod ipsum dolor sit amet</p>
                    </div><!-- /.text-box -->
                </div><!-- /.single-main-dish -->
            </div><!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-main-dish">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-menu-1-4.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                        <a href="#"><h3>Special dish</h3></a>
                        <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod ipsum dolor sit amet</p>
                    </div><!-- /.text-box -->
                </div><!-- /.single-main-dish -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.sec-pad -->

<section class="menu-tab-title-box">
    <div class="thm-container">
        <div class="title-box">
            <h3>Our Menu</h3>
            <div class="line"></div><!-- /.line -->
        </div><!-- /.title-box -->
    </div><!-- /.thm-container -->
</section><!-- /.menu-tab-title-box -->
<section class="menu-tab-content-box">
    <div class="thm-container">
        <ul class="tab-title">
            <li class="active"><a href="#breakfast" data-toggle="tab">Break fast</a></li><!--
            --><li><a href="#lunch" data-toggle="tab">Lunch</a></li><!--
            --><li><a href="#dinner" data-toggle="tab">Dinner</a></li>
        </ul><!-- /.tab-title -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="breakfast">
                <div class="single-tab-content">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-tab-1-1.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="time-table">
                        <p>Lunch is served from 1 PM to 4 PM</p>
                    </div><!-- /.time-table -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$15</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$20</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$12</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$18</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$25</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                </div><!-- /.single-tab-content -->
            </div><!-- /.tab-pane -->
            <div class="tab-pane fade" id="lunch">
                <div class="single-tab-content">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-tab-1-2.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="time-table">
                        <p>Lunch is served from 1 PM to 4 PM</p>
                    </div><!-- /.time-table -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$15</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$20</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$12</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$18</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$25</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                </div><!-- /.single-tab-content -->
            </div><!-- /.tab-pane -->
            <div class="tab-pane fade" id="dinner">
                <div class="single-tab-content">
                    <div class="img-box">
                        <img src="{{ asset('frontend') }}/img/resturant-tab-1-1.jpg" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="time-table">
                        <p>Lunch is served from 1 PM to 4 PM</p>
                    </div><!-- /.time-table -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$15</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$20</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$12</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$18</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                    <div class="single-price-box clearfix">
                        <div class="price-title pull-left">
                            <h3>Confit de canard</h3>
                            <p>Duck confit, white bean & ham cassoulet, wilted spinach, green veg cassoulet</p>
                        </div><!-- /.price-title -->
                        <div class="price-box pull-right">
                            <p>$25</p>
                        </div><!-- /.price-box -->
                    </div><!-- /.single-price-box -->
                </div><!-- /.single-tab-content -->
            </div><!-- /.tab-pane -->
        </div><!-- /.tab-content -->
    </div><!-- /.thm-container -->
</section><!-- /.menu-tab-content-box -->

<section class="book-table" id="book-table">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-7">
                <div class="form-content">
                    <div class="title">
                        <h3>Book a Table</h3>
                    </div><!-- /.title -->
                    <form action="#" class="book-table-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Name" name="name" required />
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email" name="email" required />
                            </div>
                            <div class="col-md-6">
                                <input type="number" placeholder="Number" name="number" required />
                            </div>
                            <div class="col-md-6">
                                <input type="date" placeholder="Date" name="date" required />
                            </div>
                            <div class="col-md-6">
                                <input type="time" placeholder="Time" name="time" required />
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Schedule" name="schedule" required />
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Message" name="message" required></textarea>
                                <button type="submit">Reserve Now</button>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </form><!-- /.book-table-form -->
                </div><!-- /.form-content -->
            </div><!-- /.col-md-7 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.book-table -->

@endsection


