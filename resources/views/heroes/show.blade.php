@extends('layouts.main')

@section('title', 'Comic')

@section('content')

    <section id="single-comic">
        <div class="comic-img">
            <img class="hero-img" src="{{ $hero->thumb }}" alt="{{ $hero->title }}">
        </div>
        <div class="wrapper-top container">
            <div>
                <h1>{{ $hero['title'] }}</h1>
                <div class="d-flex ">
                    <a class="btn btn-primary me-2" href="{{ route('heroes.index') }}">Torna indietro</a>
                    <a class="btn btn-warning me-2" href="{{ route('heroes.edit', $hero) }}">Modifica</a>
                    <form action="{{ route('heroes.destroy', $hero) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Elimina</button>
                    </form>
                </div>
                <p class="price"><strong>U.S Price:</strong> {{ $hero->price }}</p>
                <p class="description">{{ $hero->description }}</p>
            </div>
            <div>
                <h4 class="adv">ADVERTISEMENT</h4>
                <img class="logo" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="logo DC">
            </div>
        </div>
        <div class="wrapper-bottom">
            <div class="col-6-scss">
                <h2>Talent</h2>
                <hr>
                <div class="d-flex">
                    <p class="title" class="art">Art by: </p>
                    <div class="content">
                        <p class="text">{{ $hero->artists }}</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <p class="title">Written by: </p>
                    <div class="content">
                        <p class="text">{{ $hero->writers }}</p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-6-scss">
                <h2>Specs</h2>
                <hr>
                <div class="d-flex">
                    <p class="title-bottom">Series: </p>
                    <div class="content">
                        <p class="text">{{ $hero->title }}</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <p class="title-bottom">U.S Price: </p>
                    <div class="content">
                        <p class="text">{{ $hero->price }}</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex">
                    <p class="title-bottom">On Sale Date: </p>
                    <div class="content">
                        <p class="text">{{ $hero->sale_date }}</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>

@endsection
