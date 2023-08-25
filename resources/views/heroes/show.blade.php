@extends('layouts.main')

@section('title', 'Comic')

@section('content')

    <div class="card mx-3 my-3" style="width: 18rem;">
        <div class="card-body">
            <img class="img-fluid" src="{{ $hero->thumb }}" alt="{{ $hero->title }}">
            <p class="card-text">{{ $hero->title }}</p>
            <p class="card-text">{{ $hero->description }}</p>
            <p class="card-text">{{ $hero->price }}</p>
            <p class="card-text">{{ $hero->sale_date }}</p>
            <p class="card-text">{{ $hero->type }}</p>
            <p class="card-text">{{ $hero->artists }}</p>
            <p class="card-text">{{ $hero->writers }}</p>
        </div>
    </div>

@endsection
