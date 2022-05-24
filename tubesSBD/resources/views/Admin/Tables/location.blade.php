@extends('Admin.Layout.format')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        Location Table
    </div>
    <div class="mb-2">
        <a href="{{ route('addlocationview') }}" class="btn btn-primary">Add Location</a>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Location Name</th>
                <th scope="col">Address</th>
                <th scope="col">City Name</th>
                <th scope="col">QR Code</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $location)
            <tr>
                <th scope="row">{{ $location->id }}</th>
                <td>{{ $location->location_name }}</td>
                <td>{{ $location->address }}</td>
                <td>{{ $location->city->name }}</td>
                <td> <a href="{{ route('generate', $location->id) }}" class="btn btn-primary">Generate</a></td>
            </tr>
            @endforeach
        </tbody>
        {{-- 
            SELECT locations.id,locations.location_name,locations.address,cities.name
        FROM locations 
            INNER JOIN cities
                ON locations.city_id = cities.id;
                 --}}
    </table>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg-6 mb-4">
            <!-- Project Card Example -->
            <!-- Color System -->
        </div>

        <div class="col-lg-6 mb-4">
            <!-- Illustrations -->
            <!-- Approach -->
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
@endsection
