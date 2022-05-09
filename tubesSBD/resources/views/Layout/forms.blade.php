
<div class="place" id="place">
    <div class="form-place sign-up-place">
        <form  action="/register" method="POST">
            @csrf
            <h1>Create Account</h1>
            <input  type="text" name="fname" onclick="check(name)" class ="fname form-control @error('fname') is-invalid @enderror"  placeholder="Full Name" />
            @error('fname')
            <div class="fname-validation invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <input type="email" name="email" onclick="check(name)" id="email" class ="fname form-control  @error('email') is-invalid @enderror" placeholder="Email" required />
            @error('email')
            <div class="email-validation invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            
            <button>Sign Up</button>
        </form>
    </div>

    <div class="form-place sign-in-place">
        <form action="/login">
            <h1>Sign in</h1>
            <input type="email"class="form-control" placeholder="Email" />
            <button>Sign In</button>
        </form>
    </div>

    <div class="overlay-place">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p class="overlay-text">To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p class="overlay-text">Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
    
</div>

  
   
<script>
 jQuery( document ).ready(function() {
    // event for click on input (also you can use click)
    //better to change form to .yourFormClass
    $('form input[type=text]').focus(function(){
    // get selected input error container
    $(this).siblings(".invalid-feedback").hide();
    $(this).removeClass("is-invalid");
    });
    $('form input[type=email]').focus(function(){
    // get selected input error container
    $(this).siblings(".invalid-feedback").hide();
    $(this).removeClass("is-invalid");
    });
});


</script>


 