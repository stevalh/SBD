@include('AuthLayout.header')

<div class="container">
    <h2>Token have been sent to {{ session('email') }}</h2>
    <form action="/resend/{{ session('email') }}">
        <img src="images/undraw_message_sent_re_q2kl.jpg" alt="" srcset="">
        <h3>We've sent an email to you, check your email box</h3>
        <h4>If you didn't recieve the code, click the Resend Button</h4>
        <br>
        <button type="submit">Resend</button>
    </form>
</div>
@include('AuthLayout.footer')
