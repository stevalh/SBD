@extends('Main.format')

@section('content')
@include('Layout.navbar')
{{-- Profile --}}
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-6">
                                    @auth
                                    <h6>Hi, {{ auth()->user()->fname }}</h6>
                                    @else
                                    <h6>Hi</h6>
                                    @endauth
                                    {{-- Profile Menu --}}
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="profile-menu">
                                                <ul class="nav">
                                                    <li><a href="{{ route('profile.edit') }}">Edit Profile</a></li>
                                                    <li><a href="/test">COVID-19 Test</a></li>
                                                    <li><a href="/certificate">Vaccine Certificate</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Profile Menu --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="assets/images/slider-dec.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Profile --}}

{{-- Certificate --}}
<div id="certificate" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h6>Certificate</h6>
                    <h4>Your Vaccination <em>Certificate</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu">
                                    <div>
                                        <div class="thumb active">
                                            <span class="icon"><img src="assets/images/service-icon-03.png"
                                                    alt=""></span>
                                            Vaccination Certificate 1
                                        </div>
                                    </div>
                                    <div>
                                        <div class="thumb">
                                            <span class="icon"><img src="assets/images/service-icon-03.png"
                                                    alt=""></span>
                                            Vaccination Certificate 2
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>First Vaccine</h4>
                                                                <p>Name : </p>
                                                                <p>Vaccine Date : </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/services-image-5.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Second Vaccine</h4>
                                                                <p>Name : </p>
                                                                <p>Vaccine Date : </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/services-image-5.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Certificate --}}
    @endsection
