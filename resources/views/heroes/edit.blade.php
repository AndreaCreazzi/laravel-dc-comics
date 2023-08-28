@extends('layouts.main')

@section('title', ' Add Comic')

@section('content')

    <div class="card m-4">
        <div class="card-title d-flex justify-content-between align-items-center">
            <h2 class="p-3">Aggiungi Fumetto</h2>
            <a class="btn btn-success me-4" href="{{ route('heroes.index') }}">Indietro</a>
        </div>
        <div class="card-body">
            <form action="{{ route('heroes.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Inserisci titolo">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="thumb">Immagine</label>
                            <input type="url" class="form-control" id="thumb" name="thumb"
                                placeholder="Inserisci immagine">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="price">Prezzo</label>
                            <input type="text" class="form-control" id="price" name="price"
                                placeholder="Inserisci prezzo">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sale_date">Data</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date"
                                placeholder="Inserisci data">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="type">Tipologia</label>
                            <input type="text" class="form-control" id="type" name="type"
                                placeholder="Inserisci tipologia">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="artists">Artisti</label>
                            <input type="text" class="form-control" id="artists" name="artists"
                                placeholder="Inserisci artisti">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="writers">Scrittori</label>
                            <input type="text" class="form-control" id="writers" name="writers"
                                placeholder="Inserisci scrittori">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="description">Descrizione</label>
                            <textarea class="form-control" placeholder="Inserisci descrizione" id="description" name="description"
                                style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-success" type="submit">Invia</button>
                        <button class="btn btn-danger" type="reset">Cancella</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
