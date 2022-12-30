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
            <a class="navbar-brand" href="{{url('home')}}">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('home') }}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('addmissionForm') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('addmissionForm/view') }}">Customer</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <a href="http://127.0.0.1:8000/addmissionForm">
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
                    <th>School</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Telephone</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($addmissionForm_model as $addmissionForm_model_value)
                    <tr>
                        <td>{{ $addmissionForm_model_value->customer_id }}</td>
                        <td>{{ $addmissionForm_model_value->name }}</td>
                        <td>{{ $addmissionForm_model_value->email }}</td>
                        <td>{{ $addmissionForm_model_value->school }}</td>
                        <td>{{ $addmissionForm_model_value->dob }}</td>
                        <td>{{ $addmissionForm_model_value->address }}</td>
                        <td>{{ $addmissionForm_model_value->country }}</td>
                        <td>{{ $addmissionForm_model_value->city }}</td>
                        <td>{{ $addmissionForm_model_value->phone }}</td>
                        <td>{{ $addmissionForm_model_value->telephone }}</td>
                        <td>
                            <button class="btn">
                                <span class="badge badge-success">Active</span>
                            </button>
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
