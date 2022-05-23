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
@endsection
