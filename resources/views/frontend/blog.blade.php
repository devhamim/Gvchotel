@extends('frontend.layout.app')

@section('content')

<section class="inner-banner" style="background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important;  background: url('{{ asset('frontend/img/Sub-Banner-2.jpg') }}');">
    <div class="thm-container">
        <h2>Blogs</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Blogs</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->

<section class="blog-page blog-page-right with-right-sidebar sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-9 ">
                <div class="has-right-sidebar">
                    @foreach ($blogs as $blog)
                        <div class="single-blog-style-four clearfix">
                            <div class="date-box">
                                {{$blog->created_at->format('d M')}}
                            </div><!-- /.date-box -->
                            <div class="content-box">
                                <div class="img-box">
                                    <img src="{{asset('uploads/blog')}}/{{$blog->image}}" alt="Awesome Image"/>
                                </div><!-- /.img-box -->
                                <div class="text-box">
                                    <div class="meta-info">
                                        <a href="{{route('our.blog.details',$blog->slug)}}"><i class="fa fa-user"></i> By: {{$blog->rel_to_user->name}}</a>
                                    </div><!-- /.meta-info -->
                                    <a href="{{route('our.blog.details',$blog->slug)}}"><h3>{{$blog->title}}</h3></a>
                                    <p>{!! Str::limit($blog->description, 300, '...') !!}</p>
                                    <a href="{{route('our.blog.details',$blog->slug)}}" class="read-more">continue...</a>
                                </div><!-- /.text-box -->
                            </div><!-- /.content-box -->
                        </div>
                    @endforeach
                    {{-- <div class="blog-post-pagination">
                        <a href="#" class="active">1</a><!--
                        --><a href="#">2</a><!--
                        --><a href="#"><i class="fa fa-angle-right"></i></a>
                    </div><!-- /.blog-post-pagination --> --}}
                </div><!-- /.has-right-sidebar -->
            </div><!-- /.col-md-9 -->
            <div class="col-md-3">
                <div class="sidebar sidebar-right">
                    <div class="single-sidebar categories-widget">
                        <div class="title">
                            <h3>Categories</h3>
                        </div><!-- /.title -->
                        <ul class="categories-list">
                            <li><a>Luxuary Hotel</a></li>
                            <li><a>Travel Trip</a></li>
                            <li><a>Rooms & Suits</a></li>
                            <li><a>Hotel Activities</a></li>
                            <li><a>Restaurant</a></li>
                            <li><a>Dinning & Food</a></li>
                        </ul><!-- /.categories-list -->
                    </div><!-- /.single-sidebar categories-widget -->
                    <div class="single-sidebar recent-news-widget">
                        <div class="title">
                            <h3>Recent News</h3>
                        </div><!-- /.title -->
                        <ul class="recent-news-list">
                            @foreach ($blogs as $blog)
                            <li>
                                <a href="#">
                                    <h3>{{$blog->title}}</h3>
                                    <span>{{$blog->created_at->format('d M Y')}}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul><!-- /.recent-news-list -->
                    </div><!-- /.single-sidebar recent-news-widget -->

                </div><!-- /.sidebar sidebar-right -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.blog-page blog-page-right -->

@endsection
