@extends('comics.index')

@section('content')

    <h1>{{$comic->publishing_house}}</h1>
    <h2>{{$comic->comics}}</h2>
    <h3>{{$comic->series}}</h3>
    <h4>{{$comic->description}}</h4>
    <h5>{{$comic->release}}</h5>
    <h6>{{$comic->available}}</h2>


    
    @endsection
