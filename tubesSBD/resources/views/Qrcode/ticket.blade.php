<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>

    <div class="card text-center" style="width: auto margin:auto">
        <div class="card-header">
            Ticket
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $data->location_name }}</h5>

            <p class="card-text">User : {{ auth()->user()->fname }}</p>
            <p class="card-text">Address : {{ $data->address }}</p>
            <p class="card-text">City :{{ $data->city->name }}</p>
            @foreach ($data->users as $user)
                @if ($user->fname == auth()->user()->fname && $user->pivot->check_out == false)
                    <p class="card-text">Date Check-in :{{ $user->pivot->created_at }}</p>
                @endif
            @endforeach

            <a href="/checkout/{{ Session::get('location')->id }}" class="btn btn-primary">Check Out</a>
        </div>
        <div class="card-footer text-muted" style="text-align: left">
            <a href="/app" class="btn btn-primary">Close</a>
        </div>
    </div>



    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
