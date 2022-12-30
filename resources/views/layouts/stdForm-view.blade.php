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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stdForm_model as $stdForm_model_value)
                    <tr>
                        <td>{{ $stdForm_model_value->fname }}</td>
                        <td>{{ $stdForm_model_value->lname }}</td>
                        <td>{{ $stdForm_model_value->email }}</td>
                        <td>{{ $stdForm_model_value->country }}</td>
                        <td>{{ $stdForm_model_value->city }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
