@extends('layouts.app')

@section('title', 'index')

@section('content')

<h1>INDEX</h1>

@foreach ($comics as $comic) 

<p> title: {{ $comic->title}}</p>
<p> price: {{ $comic->price}}</p>
<p> description: {{ $comic->description}}</p>

@endforeach



@endsection