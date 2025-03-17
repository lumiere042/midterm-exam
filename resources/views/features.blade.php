<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Features | Ceus Hagoriles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2 class="mb-4">Laravel Features</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->Name }}</td>

                    <td>{{ $data->Description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>