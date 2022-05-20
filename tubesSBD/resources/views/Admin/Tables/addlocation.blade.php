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
            <div class="form-group" >
                <label for="city">City Name</label>
                <input type="text" class="form-control " id="city" name="name" >
            </div>
            @error('name')
            <div class="row" style="color: red">
               
                    {{ $message }}
                
                </div>
            @enderror      

            <div class="form-group" >
                <label for="city">City </label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            @error('name')
            <div class="row" style="color: red">
               
                    {{ $message }}
                
                </div>
            @enderror      
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
