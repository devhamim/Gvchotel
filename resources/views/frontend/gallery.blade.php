@extends('frontend.layout.app')

@section('content')

<section class="inner-banner" style="background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important;  background: url('{{ asset('frontend/img/Sub-Banner-1.jpg') }}');">
    <div class="thm-container">
        <h2>Gallery</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Gallery</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->


<section class="sec-pad gallery-page-one gallery-style-two">
    <div class="thm-container">
        {{-- <div class="gallery-filter">
            <ul class="post-filter masonary text-center">
                <li class="filter active" data-filter=".masonary-item"><span>All</span></li>
                <li class="filter " data-filter=".spa"><span>Spa</span></li>
                <li class="filter " data-filter=".rooms"><span>Rooms</span></li>
                <li class="filter " data-filter=".wedding"><span>Wedding</span></li>
                <li class="filter " data-filter=".activities"><span>Activities</span></li>
                <li class="filter " data-filter=".restaurant"><span>Restaurant</span></li>
                <li class="filter " data-filter=".pool"><span>Pool</span></li>
            </ul><!-- /.post-filter -->
        </div><!-- /.gallery-filter --> --}}
        <div class="row masonary-layout filter-layout" data-filter-class="filter">
            @foreach ($gallerys as $gallery)
                <div class="col-md-4 col-sm-6 col-xs-12 masonary-item single-filter-item spa rooms">
                    <div class="single-gallery-style-two">
                        <div class="img-box">
                            <img src="{{ asset('uploads/gallery') }}/{{ $gallery->image }}" alt="Awesome Image"/>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        {{-- <a href="#"><h3>Activities</h3></a> --}}
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
            {!! $gallerys->links() !!}
        </div>
    </div><!-- /.thm-container -->
</section><!-- /.sec-pad -->

@endsection

