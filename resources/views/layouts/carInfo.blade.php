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
    <form action="{{ url('/') }}/carInfo" method="post">
        @csrf
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">
                            Vehicle Registration
                        </h1>
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
                            <label for="">Registration No</label>
                            <input type="text" name="registration_no" id="" class="form-control"
                                placeholder="" />
                            <span class="text-danger">
                                @error('registration_no')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Color</label>
                            <input type="text" name="color" id="" class="form-control" placeholder="" />
                            <span class="text-danger">
                                @error('color')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Make</label>
                            <input type="text" name="make" id="" class="form-control" placeholder="" />
                            <span class="text-danger">
                                @error('make')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Model</label>
                            <input type="text" name="model" id="" class="form-control" placeholder="" />
                            <span class="text-danger">
                                @error('model')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Body Type</label>
                            <input type="text" name="body_type" id="" class="form-control" placeholder="" />
                            <span class="text-danger">
                                @error('body_type')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Model Year</label>
                            <input type="text" name="model_year" id="" class="form-control"
                                placeholder="" />
                            <span class="text-danger">
                                @error('model_year')
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
