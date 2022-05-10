@extends('Main.format')

@section('content')
    <div class="intro-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="assets/images/logo-v1.png" alt="">
                    <h1>TraceTogether, safer together</h1>
                    <h4>Join over 90% of people in Singapore</h4>
                    <h4>In stopping the spread of COVID-19 community-driven contact tracing</h4>
                    <div class="first-button scroll-to-section">
                        <a href="#place">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                @include('Layout.new_forms')
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                @include('Layout.forms')
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    <script>

    </script>

@endsection
