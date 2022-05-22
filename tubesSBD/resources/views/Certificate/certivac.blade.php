@extends('Main.format')

@section('content')
    @include('Layout.navbar')
    {{-- Profile --}}
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @yield('certificate')
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Profile --}}

    <script></script>
@endsection
