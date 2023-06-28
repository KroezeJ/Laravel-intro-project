<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Planets</title>
</head>
<body>
    <h1>All Planets</h1>
    <ul>
        @foreach ($solarsystems as $solarsystem)
            <li>
                <a>
                    {{ $solarsystem->name }} - {{ $solarsystem->age_in_years }} years old - {{$solarsystem->planets_count}} planets
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
