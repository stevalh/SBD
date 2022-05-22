@extends('Admin.Layout.format')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    @if (session()->has('check'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('check') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        Give Swab Test Result
    </div>
    <div class="mb-2">
        <a href="{{ route('test') }}" class="btn btn-primary">Back</a>
    </div>
    <form method="POST" action="{{ route('addtest') }}">
        @csrf
        <div class="form-group">
            <label for="city">Patient name</label>
            <input type="text" class="form-control " id="city" name="name" required>
        </div>
        <div class="row" style="color: red">
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="city">Patient NIK</label>
            <input type="number" class="form-control " id="city" name="NIK" required>
        </div>
        <div class="row" style="color: red">
            @error('NIK')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="city">Patient Email</label>
            <input type="email" class="form-control " id="city" name="email" required>
        </div>
        <div class="row" style="color: red">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="city">Result</label>
            <select class="form-select" aria-label="Default select example" name="result">
                <option value="positive">Positive</option>
                <option value="negative">Negative</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
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
