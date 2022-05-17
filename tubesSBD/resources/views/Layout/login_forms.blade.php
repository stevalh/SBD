@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="assets/images/img-01.png" alt="IMG">
            </div>
        </div>
        <div class="col-lg-6">
            <form method="POST" action="{{ route('send.email') }}" class="login login100-form validate-form">
                @csrf
                <span class="login100-form-title">
                    Member Login
                </span>
                <div class="wrap-input100 " >
                    <input class="email input100  @error('email') is-invalid @enderror" type="email"  value="{{ old('email') }}" name="email" placeholder="Email" required>
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
                        Login
                    </button>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="/signup">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
            <a href="/administrator" style="text-decoration:none">Admin</a>
        </div>
    </div>
</div>

<script>

   
    jQuery(document).ready(function() {
       // event for click on input (also you can use click)
       //better to change form to .yourFormClass
       $('.login input[type=email]').focus(function(){
       // get selected input error container
       $(this).siblings(".invalid-feedback").hide();
       $(this).removeClass("is-invalid");
       });
   });