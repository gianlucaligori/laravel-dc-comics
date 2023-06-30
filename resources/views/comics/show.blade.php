@extends('comics')

@section('contents')
    <div> {{ $comic->title }}</div>
    <div> {{ $comic->price }}</div>
    <div> {{ $comic->series }}</div>
    <div> {{ $comic->sale_date }}</div>
    <div>{{ $comic->type }}</div>
@endsection
