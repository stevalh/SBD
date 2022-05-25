
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,600;1,500&display=swap');
        *{
            margin: 0;
            padding: 0;

        }
        .container{
            
            margin: 20%;
            padding: 10%;
            border: 1px black solid;
            border-radius: 20px;
            display: grid;
            text-align: center;
            
        }
        img{
            max-width: 100%;
        }
        h2{
            font-family: 'EB Garamond', serif;
            font-size: 30px;
            background-color: #ff00ddd2;
            border-radius: 30px;
        }
        a{
            
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ohhh Sorry, but You haven't Completed <a href="{{ route('profile.edit') }}">Your Profile</a> </h2>
        <img src="/public/assests/images/sorry.png" alt="">
    </div>
</body>
</html>