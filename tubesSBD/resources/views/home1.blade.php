@extends('Main.format')

@section('content')
    @include('Layout.navbar')
    @if (!Auth::user())
        {{ Redirect::to('/') }}
    @endif



    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">



        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        @auth
                                            <h6>Hi, {{ auth()->user()->fname }}</h6>
                                        @else
                                            <h6>Hi</h6>

                                        @endauth

                                        <h2>TraceTogether, safer together</h2>
                                        <p>Join over 90% of people in Singapore in stopping the spread of COVID-19 through
                                            community-driven contact tracing</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-first-button scroll-to-section">
                                            <a href="#statistic">Statistic</a>
                                        </div>
                                    </div>
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

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Our Services</h6>
                        <h4>What TraceTogether <em>Provides</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="statistic" class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/service-icon-01.png"
                                                        alt=""></span>
                                                Covid-19 Statistic
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/service-icon-02.png"
                                                        alt=""></span>
                                                Covid-19 Test
                                            </div>
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
                                                                <h4>Covid-19 Statistic</h4>
                                                                <p>Infected</p>
                                                                <p>Healed</p>
                                                                <div class="ticks-list"><span><i
                                                                            class="fa fa-check"></i>
                                                                        Data Info</span>
                                                                    <span><i class="fa fa-check"></i> Update
                                                                        Everytime</span>
                                                                    <span><i class="fa fa-check"></i> Our Analysis</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/services-image.jpg" alt="">
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
                                                                <h4>Healthy Food &amp; Life</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sedr do eiusmod deis tempor incididunt ut labore et
                                                                    dolore kengan darwin doerski token.
                                                                    dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i
                                                                            class="fa fa-check"></i>
                                                                        Optimized Template</span> <span><i
                                                                            class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Optimized
                                                                        Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/services-image-02.jpg" alt="">
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
@endsection
