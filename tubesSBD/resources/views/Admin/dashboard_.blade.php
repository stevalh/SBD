<!DOCTYPE html>
<html>

<head>
    <title>Admin Auth | Tracer</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        Welcome, {{ auth()->guard('admin')->user()->name }} <br>
        In the Admin Dashboard.....
    </div>
    <a href="{{ route('adminLoginPost') }}">Log Out</a>
</body>

</html>
