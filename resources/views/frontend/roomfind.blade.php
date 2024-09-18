@extends('frontend.layout.app')

@section('content')

<section class="inner-banner" style="background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important; background: url('{{ asset('frontend/img/Sub-Banner-1.jpg') }}')">
    <div class="thm-container pt-5">
        <h2>Rooms Grid</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Rooms Grid</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->


<section class="rooms-style-one room-grid-page">
    <div class="thm-container">
        <div class="row">
            @foreach ($rooms_gest as $room)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-rooms-style-one">
                        <div class="img-box">
                            <img src="{{asset('uploads/rooms')}}/{{$room->image}}" alt="Awesome Image"/>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{route('room.details',[$room->slug,'check_in' => $checkIn, 'check_out' => $checkOut])}}">book now</a>
                                    </div><!-- /.content -->
                                </div><!-- /.box -->
                            </div><!-- /.overlay -->
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a href="{{route('room.details',[$room->slug,'check_in' => $checkIn, 'check_out' => $checkOut])}}"><h3>{{ Str::limit($room->title, 22, '...') }}</h3></a>
                            <div class="tags">
                                <a href="{{route('room.details',[$room->slug,'check_in' => $checkIn, 'check_out' => $checkOut])}}">{{$room->interior}}</a>,
                            </div>
                            <div class="price-box clearfix">
                                <div class="price pull-left"><span class="price-label">${{$room->price}}</span><span class="sep">/</span>per night</div><!-- /.price pull-left -->
                                <a href="{{route('room.details',[$room->slug,'check_in' => $checkIn, 'check_out' => $checkOut])}}" class="more pull-right"><i class="fa fa-info"></i>Know more</a><!-- /.more pull-right -->
                            </div><!-- /.price-box -->
                        </div><!-- /.text-box -->
                    </div><!-- /.single-rooms-style-one -->
                </div><!-- /.col-md-4 -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.rooms-style-one -->

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

