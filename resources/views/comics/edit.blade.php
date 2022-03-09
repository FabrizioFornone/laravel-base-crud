@extends('layout.default')

@section('content')

<form action="{{ route('comics.update', $comic->id) }}" method="post">

    @csrf

    @method('PUT')

    <br />
    <div>
        <label for="publishing_house">Publishing House</label>
        <input type="text" name="publishing_house" value="{{$comic->publishing_house}}">
    </div>
    <br />

    <div>
        <label for="comics">Comics</label>
        <input type="text" name="comics" value="{{$comic->comics}}">
    </div>
    <br />

    <div>
        <label for="series">Series</label>
        <input type="text" name="series" value="{{$comic->series}}">
    </div>
    <br />

    <div>
        <label for="description">Description</label>
        <input type="text" name="description" value="{{$comic->description}}">
    </div>
    <br />

    <div>
        <label for="release">Release</label>
        <input type="text" name="release" value="{{$comic->release}}">
    </div>
    <br />

    <div>
        <label for="available">Available</label>
        <input type="text" name="available" value="{{$comic->available}}">
    </div>
    <br />
    <input type="submit" value="Invia">

</form>

@endsection