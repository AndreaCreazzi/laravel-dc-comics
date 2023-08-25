@extends('layouts.main')

@section('title', 'Comics')

@section('content')
    <div class="d-flex flex-wrap">
        <section class="comics">
            <div class="card-container">
                @foreach ($heroes as $hero)
                    <div class="card-scss">
                        <a class="text-decoration-none" href="{{ route('heroes.show', $hero) }}">
                            <div class="img-container">
                                <img class="img-card" src="{{ $hero->thumb }}" alt="">
                            </div>
                            <p class="p-subclass">{{ $hero->title }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="load">
                <a href="{{ route('heroes.create') }}" class="btn-scss text-decoration-none">Inserisci Nuovo Fumetto</a>
            </div>
        </section>
        <section class="shop">
            <figure>
                <p><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">DIGITAL COMICS
                </p>
                <p><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">DC MERCHANDISE
                </p>
                <p><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">SUBSCRITION</p>
                <p><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">COMIC SHOP
                    LOCATOR
                </p>
                <p><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">DC POWER VISA</p>
            </figure>
        </section>
    </div>
@endsection
