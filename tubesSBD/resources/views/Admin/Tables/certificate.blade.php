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

            Certificate Table
        </div>
        <div class="mb-2">
            <a href="{{ route('addcertiview') }}" class="btn btn-primary">Give Certificate</a>
        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    
                    <th scope="col">Admin</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Owner NIK</th>
                    <th scope="col">Owner email</th>
                    <th scope="col">Vaccine Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($certificates as $certi)
                    
                <tr>
                    <td>{{ $certi->id }}</td>
                    <td>{{ $certi->admin->name }}</td>
                    <td>{{ $certi->owner_name }}</td>
                    <td>{{ $certi->owner_NIK }}</td>
                    <td>{{ $certi->user->email }}</td>
                    <td>{{ $certi->vactype->vaccine_name }}</td>
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
