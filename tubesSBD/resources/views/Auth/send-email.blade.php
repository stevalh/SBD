@include('AuthLayout.header')

<h1>Token have been sent to {{ session('email') }}</h1>

<form action="/resend/{{ session('email') }}" method="POST">
    @csrf
<h5>if you didn't recieve the code,Click Resend Button</h5>    
<button type="submit">Resend</button>
</form>
@include('AuthLayout.footer')