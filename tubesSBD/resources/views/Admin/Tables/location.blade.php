@extends('Admin.Layout.format')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      
                       Location Table
                    </div>
                    <div class="mb-2">
                        <button type="button" class="btn btn-primary">Add City</button>
                    </div>
                    

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Location Name</th>
                            <th scope="col">City Name</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($locations as $location)
                                
                            <tr>
                                <th scope="row">{{ $location->id }}</th>
                                <td>{{ $location->location_name }}</td>
                                <td>{{ $location->city->name }}</td>
                                
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

   