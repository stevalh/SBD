@extends('Main.format')

@section('content')
    
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
                                    <div class="col-lg-12">
                                        <form class="" action="{{ route('profile.update') }}" method="POST">
                                            @method("put")
                                            @csrf
                                            <span class="">
                                                Update Profile
                                            </span>
                                            <label for="fname"></label>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="fname input100  @error('fname') is-invalid @enderror" type="text"
                                                    value="{{ old('fname', auth()->user()->fname) }}" name="fname" placeholder="Full Name" required>
                                                @error('fname')
                                                    <div class="fname-validation invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <span class="focus-input100"></span>
                                                <span class="symbol-input100">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <label for="NIK"></label>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="NIK input100  @error('NIK') is-invalid @enderror" type="text"
                                                    value="{{ old('NIK', auth()->user()->NIK) }}" name="NIK" placeholder="NIK" required>
                                                @error('NIK')
                                                    <div class="NIK-validation invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <span class="focus-input100"></span>
                                                <span class="symbol-input100">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <label for="email"></label>
                                            <div class="wrap-input100 validate-input" >
                                                <input class="email input100  @error('email') is-invalid @enderror" type="email"
                                                    value="{{ old('email', auth()->user()->email) }}" name="email" placeholder="Email" required>
                                                @error('email')
                                                    <div class="email-validation invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <span class="focus-input100"></span>
                                                <span class="symbol-input100">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                </span>
                                            </div>
                        
                                            
                                                <button type="submit" class="btn btn-primary">
                                                 Update
                                                </button>
                                            
                        
                                            
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