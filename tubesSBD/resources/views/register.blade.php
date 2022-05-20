@extends('Main.format')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="assets/images/img-01.png" alt="IMG">
                </div>
            </div>
            <div class="col-lg-6">
                <form class="regis login100-form validate-form" action="/register" method="POST">
                    @csrf
                    <span class="login100-form-title">
                        Sign Up
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="fname input100  @error('fname') is-invalid @enderror" type="text"
                            value="{{ old('fname') }}" name="fname" placeholder="Full Name" required>
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
                    {{-- <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="NIK input100  @error('NIK') is-invalid @enderror" type="text"
                            value="{{ old('NIK') }}" name="NIK" placeholder="Full Name" required>
                        @error('NIK')
                            <div class="NIK-validation invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div> --}}

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="email input100  @error('email') is-invalid @enderror" type="email"
                            value="{{ old('email') }}" name="email" placeholder="Email" required>
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

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Sign Up
                        </button>
                    </div>

                    <div class="text-center p-t-136">
                        <p>Already have an account? <a class="txt2" href="/">
                                Log In
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a></p>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function() {
            // event for click on input (also you can use click)
            //better to change form to .yourFormClass
            $('.regis input[type=text]').focus(function() {
                // get selected input error container
                $(this).siblings(".invalid-feedback").hide();
                $(this).removeClass("is-invalid");
            });
            $('.regis input[type=email]').focus(function() {
                // get selected input error container
                $(this).siblings(".invalid-feedback").hide();
                $(this).removeClass("is-invalid");
            });
        });
    </script>
@endsection
