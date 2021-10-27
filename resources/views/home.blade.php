@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @foreach ($comics as $comic)
        {{ $comic['title'] }}
        <br>
    @endforeach
@endsection