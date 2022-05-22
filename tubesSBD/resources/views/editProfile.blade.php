@extends('Main.format')

@section('content')
<div class="container">
    @if (session()->has('message'))
    <div class="alert alert-danger " role="alert">
        {{ session('message') }}
        @endif
        @if (session()->has('success'))
        <div class="alert alert-success " role="alert">
            {{ session('success') }}
            @endif
        </div>

        {{-- Profile --}}
        <div class="wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                                    data-wow-delay="1s">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="" action="{{ route('profile.update') }}" method="POST">
                                                @csrf
                                                <span class="">
                                                    Update Profile
                                                </span>
                                                <label for="fname"></label>
                                                <div class="wrap-input100 validate-input">
                                                    <input class="fname input100  " type="text"
                                                        value="{{ auth()->user()->fname }}" name="fname"
                                                        placeholder="Full Name" required>
                                                    @error('fname')
                                                    <div class="fname-validation" style="color: red">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    <span class="focus-input100"></span>
                                                    <span class="symbol-input100">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <label for="NIK"></label>
                                                <div class="wrap-input100 validate-input">
                                                    <input class="NIK input100 " type="text"
                                                        value="{{  auth()->user()->NIK }}" name="NIK" placeholder="NIK"
                                                        required>
                                                    @error('NIK')
                                                    <div class="NIK-validation " style="color: red">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    <span class="focus-input100"></span>
                                                    <span class="symbol-input100">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <label for="email"></label>
                                                <button type="submit" class="btn btn-primary">
                                                    Update
                                                </button>
                                                <a href="/profile" style="color: #ababab">Back to profile</a>
                                            </form>
                                            {{-- End Profile Menu --}}
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
        {{-- End Profile --}}

        <script></script>
        @endsection
