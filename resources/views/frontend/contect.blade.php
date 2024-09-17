@extends('frontend.layout.app')
@section('content')

<section class="inner-banner" style="background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important;  background: url('{{ asset('frontend/img/Sub-Banner-14.jpg') }}');">
    <div class="thm-container">
        <h2>Contact us</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Contact us</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->


<section class="contact-page contact-page-one sec-pad">
    <div class="thm-container">
        <div class="title">
            <h3>Drop us message for any querry</h3>
            <div class="line"></div><!-- /.line -->
        </div><!-- /.title -->
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('customerMessage.store') }}" method="POST" class="contact-form row">
                    @csrf
                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Your Name" required="">
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <input type="email" name="email" placeholder="Enter Your Email" required="">
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <input type="number" name="phone" placeholder="Enter Your Phone" required="">
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <input type="text" name="subject" placeholder="Enter Your Subject" required="">
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-12">
                        <textarea name="message" id="Message" placeholder="Write Message" required=""></textarea>
                        <button type="submit">Submit Now</button>
                    </div><!-- /.col-md-6 -->
                </form><!-- /.contact-form -->
            </div><!-- /.col-md-8 -->
            <div class="col-md-4">
                <div class="contact-page-sidebar">
                    <div class="title-box">
                        <h3>Mendoz Suit</h3>
                        <div class="line"></div><!-- /.line -->
                    </div><!-- /.title-box -->
                    <div class="contact-info">
                        <div class="single-contact-info">
                            <i class="fa fa-map-marker"></i>
                            @if ($settings->first()->address != null)
                                <p>{{ $settings->first()->address }}</p>
                            @endif
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info">
                            <i class="fa fa-envelope"></i>
                            @if ($settings->first()->email != null)
                                <p>{{ $settings->first()->email }}</p>
                            @endif
                        </div><!-- /.single-contact-info -->
                    </div><!-- /.contact-info -->
                    @if ($settings->first()->number != null)
                        <div class="sub-title">
                            <h3>Reception Phone No.</h3>
                        </div><!-- /.sub-title -->
                        <div class="contact-info">
                            <div class="single-contact-info">
                                <i class="fa fa-phone"></i>
                                    <p>{{ $settings->first()->number }}</p>
                            </div><!-- /.single-contact-info -->
                        </div><!-- /.contact-info -->
                    @endif
                </div><!-- /.contact-page-sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.contact-page contact-page-one -->


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7928.863091545279!2d-75.79852102230426!3d45.36341546443504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce01237874e761%3A0xc3cbb1c760bfce5f!2sThe%20Beachconers%20Microcreamery!5e0!3m2!1sen!2sbd!4v1725960618784!5m2!1sen!2sbd" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@endsection
