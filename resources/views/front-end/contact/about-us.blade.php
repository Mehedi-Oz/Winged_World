@extends('front-end.master')

@section('title')
    About Us
@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">About Us</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="team section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Core Team</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-left: 250px;">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team">
                        <div class="image">
                            <img src="{{asset('front-end-asset')}}/assets/images/team/02.png" alt="#">
                        </div>
                        <div class="content">
                            <div class="info">
                                <h3>Fahim Ur Rahman</h3>
                                <h5>Frontend Developer</h5>
                                <ul class="social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team">
                        <div class="image">
                            <img src="{{asset('front-end-asset')}}/assets/images/team/01.png" alt="#">
                        </div>
                        <div class="content">
                            <div class="info">
                                <h3>Muhammad Hasan</h3>
                                <h5>Backend Developer</h5>
                                <ul class="social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team">
                        <div class="image">
                            <img src="{{asset('front-end-asset')}}/assets/images/team/03.png" alt="#">
                        </div>
                        <div class="content">
                            <div class="info">
                                <h3>Anik Ahmed</h3>
                                <h5>Designer</h5>
                                <ul class="social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
