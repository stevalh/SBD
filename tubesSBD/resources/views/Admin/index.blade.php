@extends('Admin.Layout.format')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Welcome Back, {{ Auth::user()->name }}</h1>

        </div>
        <div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">Users</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text" style="font-size:">{{ $users }}</p>
                        </div>
                    </div>
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">Test</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">Total Tests</h5>
                            <p class="card-text">{{ $tests }}</p>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4">
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">City</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">Total Cities</h5>
                            <p class="card-text">{{ $cities }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header">Location</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">Total Locations</h5>
                            <p class="card-text">{{ $locations }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->


        <!-- Content Row -->



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
