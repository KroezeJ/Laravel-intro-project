<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Planet</title>
</head>
<body>
    <h1>{{$solarsystem->name}}</h1>
    <p>{{$solarsystem->age_in_years}} years old</p>
    <h2>Planets in this system</h2>
    <table>
    <thead>
    <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Size in KM</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($planets as $planet)
    @if ($planet->solar_system_id == $solarsystem->id)
    <tr>
    <td><a href="../../planets/{{$planet->name}}">{{$planet->name}}</a></td>
    <td>{{$planet->description}}</td>
    <td>{{$planet->size_in_km}}</td>
    </tr>
    @endif
    @endforeach
    </tbody>
    </table>
</body>
</html>
