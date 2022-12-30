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
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Reg No</th>
                    <th>Color</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Body Type</th>
                    <th>Status</th>
                    <th>Model Year</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carInfo_model as $carInfo_model_value)
                    <tr>
                        <td>{{ $carInfo_model_value->Customer_id }}</td>
                        <td>{{ $carInfo_model_value->name }}</td>
                        <td>{{ $carInfo_model_value->email }}</td>
                        <td>{{ $carInfo_model_value->registration_no }}</td>
                        <td>{{ $carInfo_model_value->color }}</td>
                        <td>{{ $carInfo_model_value->make }}</td>
                        <td>{{ $carInfo_model_value->model }}</td>
                        <td>{{ $carInfo_model_value->body_type }}</td>
                        <td>
                            @if ($carInfo_model_value->Status == '1')
                                complete
                            @else
                                pending
                            @endif
                        </td>
                        <td>{{ $carInfo_model_value->model_year}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
