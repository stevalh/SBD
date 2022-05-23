@extends('Main.format')
@section('content')
{{-- Certificate --}}
<div id="certificate" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h6>Covid-19 Test Result</h6>
                    <h4>
                        <button style="color: #ff00dd"><a class="" href="/app" style="color: #ebebeb">Back to Home</a></button>
                        
                    </h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <ul class="nacc">
                    <li class="active">
                        <div>
                            <div class="row">
                                @if($test)
                                {{-- @auth
                                    <h6>Hi, {{ auth()->user()->fname }}</h6>
                                    @else
                                    <h6>Hi</h6>
                                    @endauth --}}
                                
                                <div class="col-lg-6 align-self-center">
                                    <div class="left-text">
                        
                                            <h4 style="margin-bottom: 10px">Result Test Covid-19 </h4> 
                                        <p>Name : {{ $test -> patient_name }}<br>
                                            NIK : {{ $test -> patient_NIK }}<br>
                                            Date : {{ $test -> created_at }}<br>
                                            Result : {{ $test -> result}}</p>
                                        
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 align-self-center">
                                    <div class="right-image">
                                        <img src="assets/images/pcr-test.png" alt="" style="color: rgb(113, 105, 226); max-width : 70%;">
                                    </div>
                                </div>
                            
                            </div>
                            @endif
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
{{-- End Certificate --}}
@endsection