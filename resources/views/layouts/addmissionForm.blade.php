<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <form action="{{ url('/') }}/addmissionForm" method="post">
        @csrf
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center" style="margin-top: ">
                            Addmission Form
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="" />
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
                        <input type="email" name="email" id="" class="form-control" placeholder="" />
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
                        <label for="">School</label>
                        <input type="text" name="school" id="" class="form-control" placeholder="" />
                        <span class="text-danger">
                            @error('school')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Date of birth</label>
                        <input type="date" name="dob" id="" class="form-control" placeholder="" />
                        <span class="text-danger">
                            @error('dob')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address" id="" class="form-control" placeholder="" />
                        <span class="text-danger">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Country</label>
                        <input type="text" name="country" id="" class="form-control" placeholder="" />
                        <span class="text-danger">
                            @error('country')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">city</label>
                        <input type="text" name="city" id="" class="form-control" placeholder="" />
                        <span class="text-danger">
                            @error('city')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone" id="" class="form-control" placeholder="" />
                        <span class="text-danger">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Telephone</label>
                        <input type="text" name="telephone" id="" class="form-control"
                            placeholder="" />
                        <span class="text-danger">
                            @error('telephone')
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

</body>

</html>
