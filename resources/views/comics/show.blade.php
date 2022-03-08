@extends('comics.index')

@section('content')

    <h2>{{$comic->publishing_house}}</h2>
    <h2>{{$comic->comics}}</h2>
    <h2>{{$comic->series}}</h2>
    <h2>{{$comic->description}}</h2>
    <h2>{{$comic->release}}</h2>
    <h2>{{$comic->available}}</h2>

    <button><a href="{{ route('comics.index')}}">Inseriscine un altro!</a></button>

    
    @endsection
