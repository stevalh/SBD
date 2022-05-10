@extends('Main.format')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="assets/images/img-01.png" alt="IMG">
            </div>
        </div>
        <div class="col-lg-6">
            <form class="login100-form validate-form">
                <span class="login100-form-title">
                    Sign Up
                </span>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Full Name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
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
@endsection
