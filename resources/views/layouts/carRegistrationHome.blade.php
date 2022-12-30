<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon"
    href="https://hips.hearstapps.com/hmg-prod/images/2023-jaguar-xf-sedan-front-1663006302.jpg?crop=0.782xw:0.659xh;0.0440xw,0.171xh&resize=1200:*">
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
    </div>
    {{-- <div class="container">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}
    <style>
        body {
            background-image: url(https://img.paperform.co/fetch/w_1370,/https://s3.amazonaws.com/pf-upload-01/u-59886/1/2020-11-05/7113bme/pexels-photo-97075.jpeg)
        }
    </style>
</body>

</html>
