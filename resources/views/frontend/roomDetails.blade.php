@extends('frontend.layout.app')

@section('content')

<section class="inner-banner">
    <div class="thm-container">
        <h2>Room Details</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Room Details</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->


<section class="booking-page sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-9">
                <div class="booking-page-content">
                    <div class="img-box">
                        <div class="owl-theme owl-carousel booking-page-gallery">
                            <div class="item">
                                <img src="{{asset('uploads/rooms')}}/{{$rooms->first()->image}}" alt="Awesome Image"/>
                            </div><!-- /.item -->
                            <div class="item">
                                <img src="{{asset('uploads/rooms')}}/{{$rooms->first()->image}}" alt="Awesome Image"/>
                            </div><!-- /.item -->
                        </div><!-- /.owl-theme owl-carousel booking-page-gallery -->
                    </div><!-- /.img-box -->
                    <div class="content-box">
                        <h3>{{$rooms->first()->title}}</h3>
                        <p>{!! $rooms->first()->description !!}</p>

                    </div><!-- /.text-box -->
                </div><!-- /.booking-page-content -->
            </div><!-- /.col-md-9 -->
            <div class="col-md-3">
                <div class="booking-sidebar">
                    <div class="booking-page-form-wrapper single-booking-sidebar overlapped">
                        <div class="price-box">
                            <span class="amount">${{$rooms->first()->price}}</span>/ Night
                        </div><!-- /.price-box -->
                        <div class="form-content">
                            <form action="{{route('gest.room.book')}}" method="POST" id="dreamit-form">
                                @csrf
                                <input type="hidden" name="room_id" value="{{$rooms->first()->id}}">
                                <h3>Drop us your query</h3>
                                <input type="date" class="form-control" name="checkin" value="{{$checkIn}}" required>
                                    @error('checkin')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                <input type="date" class="form-control"  name="checkout" value="{{$checkOut}}" required>
                                    @error('checkout')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                <div class="py-3" style="padding: 25px 0">
                                    <select name="rooms" class="form-control" required>
                                        <option value="1">1 Rooms</option>
                                        <option value="2">2 Rooms</option>
                                        <option value="3">3 Rooms</option>
                                        <option value="4">4 Rooms</option>
                                        <option value="5">5 Rooms</option>
                                    </select>
                                </div>
                                <select name="gest" class="form-control" required>
                                    @foreach ($rooms as $room)
                                        <option value="{{$room->id}}">{{$room->adult}} Adult, {{$room->childreen}}  Child</option>
                                    @endforeach
                                </select>
                                <button type="submit">Book this room</button>
                            </form>
                        </div><!-- /.form-content -->
                    </div><!-- /.booking-page-form-wrapper -->

                    <div class="contact-information single-booking-sidebar">
                        <h3>More information</h3>
                        <div class="single-contact-info">
                            <div class="text-box">{{$rooms->first()->interior}}</div><!-- /.text-box -->
                        </div><!-- /.single-contact-info -->
                        <div class="single-contact-info">
                            @php
                                $gest = $rooms->first()->adult+$rooms->first()->childreen;
                            @endphp
                            <div class="text-box">{{$rooms->first()->adult}} - {{$gest}} Persons</div><!-- /.text-box -->
                        </div>
                        <div class="single-contact-info">
                            <div class="text-box">{{$rooms->first()->subtitle}}</div><!-- /.text-box -->
                        </div>
                        <div class="single-contact-info">
                            <div class="text-box">Free WiFi Available</div><!-- /.text-box -->
                        </div>
                        <div class="single-contact-info">
                            <div class="text-box">Swimingpools</div><!-- /.text-box -->
                        </div>
                        <div class="single-contact-info">
                            <div class="text-box">Breakfast</div><!-- /.text-box -->
                        </div>
                        <div class="single-contact-info">
                            <div class="text-box">Gym facilities</div><!-- /.text-box -->
                        </div>
                    </div><!-- /.contact-information -->
                </div><!-- /.booking-sidebar -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.booking-page -->

@endsection
