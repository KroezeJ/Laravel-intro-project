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
        @foreach ($planets as $planet)
            <li>
                <a>
                    <a href="../../planets/{{ $planet->name }}">{{ $planet->name }}</a> - {{ $planet->description }} - {{ $planet->size_in_km }} km -
                    @foreach ($solarsystems as $solarsystem)
                        @if ($planet->solar_system_id == $solarsystem->id)
                            <a href="../../solarsystems/{{$solarsystem->id}}">{{ $solarsystem->name }}</a>
                        @endif
                    @endforeach
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
