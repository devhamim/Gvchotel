@extends('frontend.layout.app')

@section('content')

<section class="inner-banner">
    <div class="thm-container">
        <h2>Blog Details</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Blog Details</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->

<section class="blog-page blog-page-right with-right-sidebar sec-pad single-blog-post-page">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-9 ">
                <div class="has-right-sidebar">
                    <div class="single-blog-style-four clearfix single-blog-content">
                        <div class="date-box">
                            {{$blogs->first()->created_at->format('d M')}}
                        </div><!-- /.date-box -->
                        <div class="content-box">
                            <div class="img-box">
                                <img src="{{ asset('uploads/blog') }}/{{ $blogs->first()->image }}" alt="Awesome Image"/>
                            </div><!-- /.img-box -->
                            <div class="text-box">
                                <div class="meta-info">
                                    <a href="#"><i class="fa fa-user"></i> By: {{$blogs->first()->rel_to_user->name}}</a>
                                    <a href="#"><i class="fa fa-comments-o"></i> Comments: {{ $blog_comment_count }}</a>
                                </div><!-- /.meta-info -->
                                <a href="#"><h3>{{ $blogs->first()->title }}</h3></a>
                                <div class="single-blog-content">
                                    {!! $blogs->first()->description !!}
                                </div><!-- /.single-blog-content -->
                            </div><!-- /.text-box -->
                            <div class="share-box">
                                <ul class="share-list">
                                    <li><span><i class="fa fa-share-alt"></i></span></li><!--
                                    --><li><a class="twitter" href="{{ $setting->first()->twitter }}">Twitter</a></li><!--
                                    --><li><a class="facebook" href="{{ $setting->first()->facebook }}">Facebook</a></li><!--
                                    --><li><a class="red" href="{{ $setting->first()->youtube }}">Youtube</a></li><!--
                                    --><li><a class="linkedin" href="{{ $setting->first()->linkedin }}">Linkedin</a></li>
                                </ul><!-- /.share-list -->
                            </div><!-- /.share-box -->
                        </div><!-- /.content-box -->
                    </div><!-- /.single-blog-style-four clearfix -->
                    <div class="comments-area">
                        <div class="title">
                            <h3>Comments {{ $blog_comment_count }}</h3>
                        </div><!-- /.title -->
                        @foreach ($blog_comment as $comment)
                            <div class="single-comment">
                                <div class="img-box">
                                    <img src="img/comment-1.jpg" alt="Awesome Image"/>
                                </div><!-- /.img-box -->
                                <div class="text-box">
                                    <h4>{{ $comment->name }}</h4>
                                    <p>{{$comment->message}}</p>
                                    <div class="meta-info">
                                        <span>{{ $comment->created_at->format('d-M-Y') }}</span>
                                    </div><!-- /.meta-info -->
                                </div><!-- /.text-box -->
                            </div><!-- /.single-comment -->
                        @endforeach
                    </div><!-- /.comments-area -->
                    <div class="leave-a-comment">
                        <div class="title">
                            <h3>Leave a comment</h3>
                        </div><!-- /.title -->
                        <form action="{{ route('blog.comment') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Your name" name="name" required />
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <input type="text" placeholder="Email Address" name="email" required />
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <textarea placeholder="Write message"  name="message" required></textarea>
                                    <button type="submit">Submit now</button>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.leave-a-comment -->
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
                            @foreach ($latest_blogs->take(6) as $blog)
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
