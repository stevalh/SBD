@extends('Admin.Layout.format')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

            Add New Type of Vaccine

        </div>

        <div class="mb-2">
            <a href="{{ route('vaccinetype') }}" class="btn btn-primary">Back</a>
        </div>


        <form method="POST" action="{{ route('addvaccine') }}">
            @csrf
            <div class="form-group" >
                <label for="city">Vaccine Name</label>
                <input type="text" class="form-control " id="city" name="name" required>
            </div>

            <div class="row" style="color: red">
                @error('name')
               
                    {{ $message }}
            </div>
            @enderror     
 
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
