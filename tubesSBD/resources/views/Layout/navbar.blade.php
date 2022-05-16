<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="assets/images/logo-v1.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        @if( auth()->user()->level ==  "admin")

                        <li class="scroll-to-section"><a href="#" class="active">Admin</a></li>
                        @endif
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#services">Services</a></li>
                        <li class="scroll-to-section">
                            <a href="#profile">Profile</a>
                        </li>
                        <li class="scroll-to-section">
                            @auth
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button>Log Out</button>
                            </div>
                            @endauth
                        </li>
                    </ul>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
