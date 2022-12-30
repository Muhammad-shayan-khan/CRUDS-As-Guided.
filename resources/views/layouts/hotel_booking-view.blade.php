<!doctype html>
<html lang="en">

<head>
    <title>view</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon"
        href="https://www.nicepng.com/png/full/418-4181968_burj-al-arab-burj-al-arab-hotel-logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="" href="">
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('hotel_booking') }}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('hotel_booking_form') }}">Book Hotel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('hotel_booking/view') }}">Customer View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.country.create') }}">Add Country</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.country.index') }}">Country View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.state.create') }}">Add State</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.state.index') }}">State View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.city.create') }}">Add City</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.city.index') }}">City View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ticket.create') }}">Add Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.ticket.index') }}">Ticket View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.department.create') }}">Add Department</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.department.index') }}">Department View</a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container-fluid p-0">
            <table class="table text-center">
                <thead>
                    <tr>
                        {{-- <th>ID</th> --}}
                        <th>Name</th>
                        <th>Email</th>
                        <th>check-in</th>
                        <th>check-out</th>
                        <th>No Of Guest</th>
                        <th>Flight No</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <div class="container-fluid">
                    <a href="http://127.0.0.1:8000/hotel_booking_form">
                        <button class="btn_add btn btn-primary">ADD</button>
                    </a>
                </div>
                <tbody>
                    @foreach ($hotel_booking_model as $hotel_booking_model_value)
                        <tr>
                            {{-- <td>{{ $hotel_booking_model_value->customer_id }}</td> --}}
                            <td>{{ $hotel_booking_model_value->name }}</td>
                            <td>{{ $hotel_booking_model_value->email }}</td>
                            <td>{{ $hotel_booking_model_value->check_in }}</td>
                            <td>{{ $hotel_booking_model_value->check_out }}</td>
                            <td>{{ $hotel_booking_model_value->guest }}</td>
                            <td>{{ $hotel_booking_model_value->flight_no }}</td>
                            <span class="">
                                <td>
                                    @if ($hotel_booking_model_value->Status == 1)
                                        <span class="badge badge-pill badge-success">confirmed</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">Pending</span>
                                    @endif
                                </td>
                            </span>
                            <td>
                                {{-- <button class="btn btn-info btn-sm">view</button> --}}
                                <a href="{{ route('hotel_booking.delete', $hotel_booking_model_value->id) }}">
                                    <button class="btn btn-danger btn-sm p-1">Delete</button></a>
                                <a href="{{ route('hotel_booking.edit', ['id' => $hotel_booking_model_value->id]) }}">
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <style>
        .btn_add {
            margin: 20px 0 20px 0;
            float: right;
        }

        .navbar-light .navbar-nav .nav-link {
            font-weight: 600;
            color: #343a40;
        }

        h4 {
            margin-top: 150px;
            border-bottom: solid;
            border-top: solid;
            color: #343a40;
        }

        h1 {
            color: #343a40;
        }

        /* .btn {
            margin-top: 40px;
            background-color: transparent;
            border: 1px solid#343a40;
            color: #343a40;
            font-weight: 500;
        } */

        /* .btn:hover {
            background-color: #343a40;
            border: 1px solid #343a40;
            color: white;
            font-weight: 700
        } */

        body {
            background-image: url(https://images.pexels.com/photos/1089645/pexels-photo-1089645.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1https://images.pexels.com/photos/4502694/pexels-photo-4502694.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            background-size: cover;
        }
    </style>
</body>

</html>
