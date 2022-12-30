<!doctype html>
<html lang="en">

<head>
    <title>components.form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="{{ url('/') }}/register" method="post">
        @csrf
        <div class="container">
           <x-input type="text" name="name" label="Please Enter Your Name"/>
           <x-input type="email" name="email" label="Please Enter Your E-mail"/>
           <x-input type="password" name="password" label="Password"/>
           <x-input type="password" name="confirm_password" label="Confirm-Password"/>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>
