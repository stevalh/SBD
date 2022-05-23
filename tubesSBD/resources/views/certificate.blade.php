@extends('Main.format')
@section('content')
{{-- Certificate --}}
<div id="certificate" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h6>Certificate</h6>
                    <h4>Your Vaccination <em>Certificate</em></h4>
                    <h4>
                        <button style="color: #ff00dd"><a class="" href="/app" style="color: #ebebeb">Back to Home</a></button>
                    </h4>
                    <div class="line-dec"></div>
                </div>
            </div>
                <?php
                $i=1;
                ?>
            @foreach ($user->certificates as $certi)
            <div class="col-lg-12">
                <ul class="nacc">
                    <li class="active">
                        <div>
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="left-text">
                                        <h4 style="margin-bottom: 10px">#{{ $i++ }} Vaccine</h4>
                                        <p>Name :{{ $certi->owner_name }} <br>
                                            NIK :{{ $certi->owner_NIK }} <br>
                                            Date :{{ $certi->created_at }} <br>
                                            Vaccine Type :{{ $certi->vactype->name }} </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 align-self-center">
                                    <div class="right-image">
                                        <img src="assets/images/medal.png" style= "max-width: 70%" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
{{-- End Certificate --}}
