
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    @if ($setting->first()->title != null)
        <title>{{ $setting->first()->title }}</title>
    @endif
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if ($setting->first()->favicon != null)
        <link rel="icon" type="image/png" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    {{-- <link rel="manifest" href="{{ asset('frontend') }}/img/favicon/manifest.json"> --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
</head>
<body>
<div class="preloader"><div class="spinner"></div></div>

@include('frontend.layout.header')

@yield('content')

@include('frontend.layout.footer')


<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
        <h3>Search</h3>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
            </span>
        </div>
    </div>
</div>

@include('sweetalert::alert')

<script src="{{ asset('frontend') }}/js/jquery.js"></script>

<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/js/bootstrap-select.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.validate.min.js"></script>
<script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('frontend') }}/js/isotope.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontend') }}/js/waypoints.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
<script src="{{ asset('frontend') }}/js/wow.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.easing.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.bxslider.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="{{ asset('frontend') }}/js/typed.min.js"></script>
<script src="{{ asset('frontend') }}/js/custom.js"></script>
<script src="{{ asset('frontend') }}/js/booking-form-config.js"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAp66FaiFFO30txAOILuVnOTpUvMKSAeRA"></script>
<!-- google map helper -->
<script src="{{ asset('frontend') }}/js/gmaps.js"></script>
<script src="{{ asset('frontend') }}/js/map-helper.js"></script>

@yield('footer_script')

</body>
</html>
