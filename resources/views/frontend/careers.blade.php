@extends('frontend.layout.app')

@section('content')

<!--==================================================-->
<!-- Start Royella Breadcumb Area -->
<section class="inner-banner" style="background-repeat: no-repeat !important; background-position: center !important; background-size: cover !important;  background: url('{{ asset('frontend/img/Sub-Banner-4.jpg') }}');">
    <div class="thm-container">
        <h2>Careers</h2>
        <div class="breadcumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Careers</span>
        </div><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</section><!-- /.inner-banner -->
<!--==================================================-->
<!-- End Royella Breadcumb Area -->
<!--==================================================-->


<!--==================================================-->
<!-- start career list Area -->
<!--==================================================-->
<div class="about-area inner">
	<div class="careerlist" style="padding: 70px 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Careers List</h2>
                    <p>Full Moon Hotel and Restaurant takes real pride in welcoming fresh and new talent to our increasing dynamic workforce. In addition to Canada nationals, our team comprises of expatriates from various other nationalities. Your career can be pursued in the following departments.</p>

                    <p>Our passionate workforce offers our customers with quality service that is trusted, treasured and experienced repeatedly. For any inquiries related to job vacancies.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Careers List
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No.</th>
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Vacancy</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($careerlists as $sl=>$careerlist)
                                    <tr>
                                        <td>{{$sl+1}}</td>
                                        <td>{{ $careerlist->department }}</td>
                                        <td>{{ $careerlist->post }}</td>
                                        <td>{{ $careerlist->vacancy }}</td>
                                        <td>
                                            <a href="{{route('careers.applay',$careerlist->id)}}" class="btn btn-primary">Apply Now</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End career list Area -->
<!--==================================================-->



@endsection
