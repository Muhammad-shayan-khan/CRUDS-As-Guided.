<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/') }}">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('carRegistrationHome') }}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('carRegistration') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('carRegistration/view') }}">Customer</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container">
            <table class="table text-center">
                <thead>
                    <tr>
                        {{-- <th>ID</th> --}}
                        <th>Name</th>
                        <th>Email</th>
                        <th>Reg No</th>
                        <th>Color</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <div class="container-fluid">
                    <a href="http://127.0.0.1:8000/carRegistration">
                        <button class="btn_add btn btn-primary">ADD</button>
                    </a>
                </div>
                <tbody>
                    @foreach ($carRegistration_model as $carRegistration_model_value)
                        <tr>
                            {{-- <td>{{ $carRegistration_model_value->customer_id }}</td> --}}
                            <td>{{ $carRegistration_model_value->name }}</td>
                            <td>{{ $carRegistration_model_value->email }}</td>
                            <td>{{ $carRegistration_model_value->registration_no }}</td>
                            <td>{{ $carRegistration_model_value->color }}</td>
                            <td>{{ $carRegistration_model_value->make }}</td>
                            <td>{{ $carRegistration_model_value->model }}</td>
                           <span class="">
                            <td>
                                @if ($carRegistration_model_value->Status == 1)
                                        <span class="badge badge-pill badge-success">Registered</span>
                                @else
                                        <span class="badge badge-pill badge-danger">Pending</span>
                                @endif
                            </td>
                           </span>
                            <td>
                                {{-- <button class="btn btn-info btn-sm">view</button> --}}
                                <a href="{{ route('carRegistration.delete',$carRegistration_model_value->id) }}">
                                    <button class="btn btn-danger btn-sm p-1">Delete</button></a>
                                <button class="btn btn-primary btn-sm">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{-- <div class="text-center">
            <a href="http://127.0.0.1:8000/addmissionForm">
                <button class="btn btn-primary">Click Me To Register</button>
            </a>
        </div> --}}
        </div>
    </div>

    <style>
        .btn_add {
            margin: 20px 0 20px 0;
            float: right;
        }
        /* body {
            background-image: url(https://img.paperform.co/fetch/w_1370,/https://s3.amazonaws.com/pf-upload-01/u-59886/1/2020-11-05/7113bme/pexels-photo-97075.jpeg)
        } */
    </style>
</body>

</html>
