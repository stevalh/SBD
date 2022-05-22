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
        Give Certificate
    </div>
    <div class="mb-2">
        <a href="{{ route('certi') }}" class="btn btn-primary">Back</a>
    </div>
    <form method="POST" action="{{ route('addcertificate') }}">
        @csrf
        <div class="form-group">
            <label for="city">Owner name</label>
            <input type="text" class="form-control " id="city" name="name" required>
        </div>
        <div class="row" style="color: red">
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="city">Owner NIK</label>
            <input type="number" class="form-control " id="city" name="NIK" required>
        </div>
        <div class="row" style="color: red">
            @error('NIK')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="city">Owner Email</label>
            <input type="email" class="form-control " id="city" name="email" required>
        </div>
        <div class="row" style="color: red">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="city">Vaccine</label>
            <select class="form-select" aria-label="Default select example" name="vaccine">
                @foreach ($vaccines as $vaccine)
                <option value="{{ $vaccine->id }}">{{ $vaccine->name }}</option>
                @endforeach
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
