@extends('layouts.app')

@section('title', 'index')

@section('content')


<div class="container p-5">
    <div class="row g-4">
        @foreach ($comics as $comic) 

            <div class="card" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="comic thumbnail">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->price}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        @endforeach
    </div>
</div>

@foreach ($comics as $comic) 

<div class="card" style="width: 18rem;">
  <img src="{{$comic->thumb}}" class="card-img-top" alt="comic thumbnail">
  <div class="card-body">
    <h5 class="card-title">{{$comic->title}}</h5>
    <p class="card-text">{{$comic->price}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endforeach



@endsection