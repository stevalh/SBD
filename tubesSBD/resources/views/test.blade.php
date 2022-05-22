@extends('Main.format')

@section('content')
    @include('Layout.navbar')
    @if (!Auth::user())
        {{ Redirect::to('/') }}
    @endif
    
    <html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- MATERIAL DESIGN ICONIC FONT -->
        <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
    
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="../css/style.css">
        <style>
            .wrapper{
                margin: 10%;
            }
        </style>
    </head>
    
    <body>
        <h1>woiiiiiii</h1>
    
        <div class="wrapper" style="background-color: #eeeeee; ">
            <div class="inner">
                <div class="image-holder">
                    <img src="" alt="">
                </div>
                <form action="">
                    <h3>Registration Form</h3>
                    <div class="form-group">
                        <input type="text" placeholder="admin id" class="form-control">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="patient id" class="form-control">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="patien name" class="form-control">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="patien NIK" class="form-control">
                        <i class="zmdi zmdi-confirmation-number"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="text" placeholder="status" class="form-control">
                        <i class="zmdi zmdi-accounts-list"></i>
                    </div>
                    
                    <div class="form-wrapper">
                        <select name="" id="" class="form-control">
                            <option value="" disabled selected>Vaccine Dose</option>
                            <option value="male">vaccine 1</option>
                            <option value="femal">vaccine 2</option>
                            <option value="other">vaccine 3</option>
                        </select>
                        <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="date" name="" id="" class="form-control">
                    </div>
                    <button>Register
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
    
    </html>
@endsection