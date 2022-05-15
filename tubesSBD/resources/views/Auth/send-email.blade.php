@include('AuthLayout.header')

<div class="container">
    <h2>Token have been sent to {{ session('email') }}</h2>
    <form action="/resend/{{ session('email') }}" method="POST">
        @csrf
        <img src="assets/images/email_has_been_sent.jpg" alt="#email has been sent">
        <h3>We've sent an email to you, check your email box</h3>
        <h4>If you didn't recieve the code, click the Resend Button</h4>
        <br>
        <button type="submit">Resend</button>
    </form>
</div>
@include('AuthLayout.footer')
