<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Planet</title>
</head>
<body>
    <h1>{{$planet->name}}</h1>
    <p>{{$planet->description}}</p>
    <a href="../../solarsystems/{{$solarsystem->id}}">{{$solarsystem->name}}</a>
</body>
</html>
