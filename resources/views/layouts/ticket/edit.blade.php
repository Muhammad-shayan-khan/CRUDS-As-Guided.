<!doctype html>
<html lang="en">

<head>
    <title>Booking Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon"
        href="https://www.nicepng.com/png/full/418-4181968_burj-al-arab-burj-al-arab-hotel-logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        </div>
        <form action="{{ route('admin.ticket.update', $ticket->id) }}" method="POST">
            @csrf
            <div class="container">
                <div class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center">
                                Add Ticket
                            </h1>
                        </div>
                    </div>

                    @if (Session::has('error'))
                        <span class="text-danger">{{ Session('error') }}</span>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control" placeholder=""
                                    value="{{ $ticket->name }}">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" id="" class="form-control" placeholder=""
                                    value="{{ $ticket->email }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Subject</label>
                                <input type="text" name="subject" id="" class="form-control" placeholder=""
                                    value="{{ $ticket->subject }}">
                                <span class="text-danger">
                                    @error('subject')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Department ID</label>
                                <input type="text" name="department_id" id="" class="form-control"
                                    placeholder="" value="{{ $ticket->department_id }}">
                                <span class="text-danger">
                                    @error('department_id')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        </form>
        <style>
            body {
                background-image: url(https://images.pexels.com/photos/1089645/pexels-photo-1089645.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1https://images.pexels.com/photos/4502694/pexels-photo-4502694.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
                background-size: cover;
                background-position: center;
            }

            h1 {
                margin-top: 50px;
                margin-bottom: 40px;
                color: #343a409e;
                border-bottom: solid;

            }

            label {
                font-weight: 500;
                color: #343a40;
            }

            .navbar-light .navbar-nav .nav-link {
                font-weight: 600;
                color: #343a40;
            }
        </style>
</body>

</html>
