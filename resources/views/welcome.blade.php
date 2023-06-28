<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <table>
    <thead>
    <tr>
    <th>Name</th>
    <th>Description</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($planets as $planet)
    <tr>
    <td>{{$planet['name']}}</td>
    <td>{{$planet['description']}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>