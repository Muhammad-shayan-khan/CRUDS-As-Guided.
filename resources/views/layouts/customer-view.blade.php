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
            <a class="navbar-brand" href="{{url('/')}}">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('customer') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('customer/view') }}">Customer</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <a href="http://127.0.0.1:8000/customer">
            <button class="btn btn-primary">ADD</button>
        </a>
       </div>
    <div class="container">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Telephone</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer_model as $customer_model_value)
                <tr>
                    <td>{{$customer_model_value->customer_id}}</td>
                    <td>{{$customer_model_value->name}}</td>
                    <td>{{$customer_model_value->email}}</td>
                    <td>{{$customer_model_value->country}}</td>
                    <td>{{$customer_model_value->city}}</td>
                    <td>{{$customer_model_value->gender}}</td>
                    <td>{{$customer_model_value->dob}}</td>
                    <td>{{$customer_model_value->address}}</td>
                    <td>{{$customer_model_value->phone}}</td>
                    <td>{{$customer_model_value->telephone}}</td>
                    <td>
                        @if ($customer_model_value->Status == -1)
                        <button class="btn">
                            <span class="badge badge-success">Active</span>
                        </button>
                    @else
                    <button class="btn">
                        <span class="badge badge-danger">Inactive</span>
                    </button>
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-danger ">Delete</button>
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


    <style>
        .btn.btn-primary {
            margin: 20px 0 20px 0;
            float: right;
        }
    </style>
</body>

</html>
