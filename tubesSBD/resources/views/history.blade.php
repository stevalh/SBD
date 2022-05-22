<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/history.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body bg-primary text-white mailbox-widget pb-0">
                        <h2 class="text-white pb-3">History</h2>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                            <div>
                                <div class="row p-4 no-gutters align-items-center">
                                    <div class="col-sm-12 col-md-6">
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <ul class="list-inline dl mb-0 float-left float-md-right">
                                            <a href="/app" class="btn btn-primary">Back</a>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mail list-->
                                <div class="table-responsive">
                                    <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                        <tbody>

                                            @foreach ($data->locations as $location)
                                            <!-- row -->
                                            <tr>
                                                <!-- label -->
                                                <td class="pl-3">
                                                    {{-- <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cst1" />
                                                        <label class="custom-control-label" for="cst1">&nbsp;</label>
                                                    </div> --}}
                                                </td>
                                                <!-- star -->
                                                {{-- <td><i class="fa fa-star text-warning"></i></td> --}}
                                                <td>
                                                    <span class="mb-0 text-muted">{{ $location->location_name }}</span>
                                                </td>
                                                <!-- Message -->
                                                <td>
                                                    <span
                                                        class="badge badge-pill text-white font-medium badge-danger mr-2">Address</span>
                                                    <span class="text-dark">{{ $location->address }}</span>
                                                </td>
                                                <!-- Attachment -->
                                                <!-- Time -->
                                                <td class="text-muted">{{ $location->pivot->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
