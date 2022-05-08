
<div class="place" id="place">
    <div class="form-place sign-up-place">
        <form action="/register" method="POST">
            @csrf
            <h1>Create Account</h1>
            {{-- <div class="social-place">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div> --}}
            {{-- <span>or use your email for registration</span> --}}
            <input  type="text"name='name' class ="@error('name') is-invalid @enderror" placeholder="Full Name" />
            @error('name')
            <div  class="invalid-feedback">
               {{ $message }}
              </div>
            @enderror
            <input type="email"name='email' class ="is-invalid" placeholder="Email" />
            <button>Sign Up</button>
        </form>
    </div>

    <div class="form-place sign-in-place">
        <form action="/login">
            <h1>Sign in</h1>
            {{-- <div class="social-place">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div> --}}
            {{-- <span>or use your account</span> --}}
            <input type="email"class="is-invalid" placeholder="Email" />
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


 