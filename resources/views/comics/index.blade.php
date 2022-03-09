<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
    <h1>New Comics </h1>
    <button><a href="{{ route('comics.create')}}">Nuovo!</a></button>


    <table>
        <thead>
            <tr>
                <th>Publishing House </th>
                <th>Comics</th>
                <th>Series</th>
                <th>Description</th>
                <th>Release</th>
                <th>Available</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($db as $comic)
            <tr>
                <td>{{ $comic->publishing_house }}</td>
                <td>{{ $comic->comics }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->release}}</td>
                <td>{{ $comic->available }}</td>
                <td>
                    <a href="{{ route("comics.edit", $comic->id) }}" >Modifica</a>
                    <a href="{{ route("comics.show", $comic->id) }}" >Dettagli</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>