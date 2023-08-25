@extends('layouts.main')

@section('title', 'Comics')

@section('content')
    <div class="p-3">
        <a class="btn btn-success" href="{{ route('heroes.create') }}">Inserisci Nuovo fumetto</a>
    </div>
    <div class="d-flex flex-wrap">
        @forelse ($heroes as $hero)
            <div class="card mx-3 my-3" style="width: 18rem;">
                <a class="text-decoration-none" href="{{ route('heroes.show', $hero) }}">
                    <div class="card-body">
                        <img class="img-fluid" src="{{ $hero->thumb }}" alt="{{ $hero->title }}">
                        <p class="card-text text-dark">{{ $hero->title }}</p>
                    </div>
                </a>
            </div>
        @empty
            <h1>Non ci son fumetti</h1>
        @endforelse
    </div>
@endsection
