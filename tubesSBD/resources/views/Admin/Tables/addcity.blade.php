@extends('Admin.Layout.format')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        Add City
    </div>

    <div class="mb-2">
        <a href="{{ route('city') }}" class="btn btn-primary">Back</a>
    </div>

    <form method="POST" action="{{ route('addcity') }}">
        @csrf
        <div class="form-group">
            <label for="city">City Name</label>
            <input type="text" class="form-control " id="city" name="name">
        </div>
        <div class="row" style="color: red">
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create a New City</button>
    </form>
    <!-- Content Row -->
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
