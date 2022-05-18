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
                        <li class="scroll-to-section"><a href="/app#top">Home</a></li>
                        <li class="scroll-to-section"><a href="/app#services">Services</a></li>
                        <li class="scroll-to-section">
                            <a href="/profile">Profile</a>
                        </li>
                        <li class="scroll-to-section">
                            {{-- @auth --}}
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button>Log Out</button>
                            </div>
                            {{-- @endauth --}}
                        </li>
                    </ul>
                    <a class="menu-trigger">
                        <span></span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
                @if(Session::has('location'))
                <div class="alert alert-info" role="alert">
                   <h5> {{ (Session::get('location'))->location_name }}</h5><a href='/checkview/{{ (Session::get("location"))->id}}' class="btn btn-primary">Checkout</a>
                  </div>
                  @endif
                  @if(session()->has('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
