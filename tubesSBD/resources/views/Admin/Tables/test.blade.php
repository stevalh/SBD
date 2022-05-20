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

            COVID Result Test Table
        </div>
        <div class="mb-2">
            <a href="{{ route('addtestview') }}" class="btn btn-primary">Give Result</a>
        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    
                    <th scope="col">Admin</th>
                    <th scope="col">Patien Name</th>
                    <th scope="col">Patient NIK</th>
                    <th scope="col">Patient email</th>
                    <th scope="col">Result</th>
                    <th scope="col">Date of the Swab Test</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tests as $test)
                    
                <tr>
                    <td>{{ $test->id }}</td>
                    <td>{{ $test->admin->name }}</td>
                    <td>{{ $test->patient_name }}</td>
                    <td>{{ $test->patient_NIK }}</td>
                    <td>{{ $test->user->email }}</td>
                    <td>{{ $test->result }}</td>
                    <td>{{ $test->created_at }}</td>
                </tr>
                @endforeach
                
               
            </tbody>
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
