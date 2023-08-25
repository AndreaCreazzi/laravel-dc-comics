@extends('layouts.main')

@section('title', 'Comic')

@section('content')

    <div class="card mx-3 my-3" style="width: 18rem;">
        <div class="card-body">
            <img class="img-fluid" src="{{ $hero->thumb }}" alt="{{ $hero->title }}">
            <p class="card-text">{{ $hero->title }}</p>
        </div>
    </div>

@endsection
