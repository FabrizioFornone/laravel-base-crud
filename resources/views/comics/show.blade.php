<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    @dump($comic)
    <h2>{{$comic->publishing_house}}</h2>
    <h2>{{$comic->comics}}</h2>
    <h2>{{$comic->series}}</h2>
    <h2>{{$comic->description}}</h2>
    <h2>{{$comic->release}}</h2>
    <h2>{{$comic->available}}</h2>
    
</body>
</html>