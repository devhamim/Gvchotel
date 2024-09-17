<header class="header home-page-two">
	<div class="header-top">
		<div class="thm-container clearfix">
			<div class="left-contact pull-left">
                @if ($setting->first()->number != null)
				    <p><i class="fa fa-phone"></i>{{ $setting->first()->number }}</p>
                @endif
                @if ($setting->first()->email != null)
				    <p><i class="fa fa-envelope-o"></i>{{ $setting->first()->email }}</p>
                @endif
			</div><!-- /.left-contact -->
			<div class="right-contact pull-right">
				<p><span>Stay Conntected:</span> <a href="{{ $setting->first()->facebook }}" class="fa fa-facebook"></a><a href="{{ $setting->first()->twitter }}" class="fa fa-twitter"></a><a href="{{ $setting->first()->youtube }}" class="fa fa-youtube"></a><a href="{{ $setting->first()->linkedin }}" class="fa fa-linkedin"></a></p>
			</div><!-- /.right-contact -->
		</div><!-- /.thm-container -->
	</div><!-- /.header-top -->
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="thm-container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{url('/')}}">
                    @if ($setting->first()->logo != null)
                        <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="Logo">
                    @endif
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-navigation" id="main-nav-bar">
                <ul class="nav navbar-nav navigation-box">
                    <li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{route('room.finds')}}">Room</a></li>
						<li><a href="{{route('services')}}">Service</a></li>
						<li><a href="{{route('restaurant')}}">Restaurant</a></li>
						<li><a href="{{route('gallerys')}}">Gallery</a></li>
                        <li><a href="{{route('about_us')}}">About</a></li>
                        <li><a href="{{route('our.blog')}}">Blog</a></li>
						<li><a href="{{route('contect')}}">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header><!-- /.header -->
