@extends('Admin.Layout.format')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

            Add Location

        </div>

        <div class="mb-2">
            <a href="{{ route('location') }}" class="btn btn-primary">Back</a>
        </div>


        <form method="POST" action="{{ route('addlocation') }}">
            @csrf
            <div class="form-group" >
                <label for="city">Location Name</label>
                <input type="text" class="form-control " id="city" name="name" required>
            </div>
            <div class="form-group" >
                <label for="city">Address</label>
                <input type="text" class="form-control " id="city" name="address" required>
            </div>
            

            <div class="form-group" >
                <label for="city">City </label>
                <select class="form-select" aria-label="Default select example" name="city">
                  @foreach ($cities as $city)
                      
                  <option value="{{ $city->id }}">{{ $city->name }}</option>
                  @endforeach
                   
                  </select>
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
