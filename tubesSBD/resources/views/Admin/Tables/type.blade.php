@extends('Admin.Layout.format')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      
                       Vaccine Table
                    </div>

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Vaccine Name</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($vaccines as $vaccine)
                                
                            <tr>
                                <th scope="row">{{ $vaccine->id }}</th>
                                <td>{{ $vaccine->name }}</td>
                                
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