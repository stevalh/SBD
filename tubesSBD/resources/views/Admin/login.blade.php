
@extends('Main.format')

@section('content')
@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="assets/images/img-01.png" alt="IMG">
            </div>
        </div>
        <div class="col-lg-6">
            <form class="regis login100-form validate-form" action="{{ route('adminLoginPost') }}" method="POST">
                @csrf
                <span class="login100-form-title">
                    Admin Login
                </span>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="email input100  @error('email') is-invalid @enderror" type="text"  value="{{ old('email') }}" name="email" placeholder="Full Name" required>
                    @error('email')
                    <div class="email-validation invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="email input100  @error('password') is-invalid @enderror" type="password"  value="{{ old('password') }}" name="password" placeholder="password" required>
                    @error('password')
                    <div class="password-validation invalid-feedback">
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
                        Sign In
                    </button>
                </div>

                <div class="text-center p-t-136">
                   <a class="txt2" href="/">
                            Back to Home Page
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>

                </div>
            </form>
        </div>
    </div>
</div>
<script>
jQuery(document).ready(function() {
    // event for click on input (also you can use click)
    //better to change form to .yourFormClass
    $('.regis input[type=text]').focus(function(){
        // get selected input error container
        $(this).siblings(".invalid-feedback").hide();
        $(this).removeClass("is-invalid");
    });
    $('.regis input[type=email]').focus(function(){
        // get selected input error container
        $(this).siblings(".invalid-feedback").hide();
        $(this).removeClass("is-invalid");
    });
});
</script>
@endsection