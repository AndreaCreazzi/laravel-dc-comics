@extends('layouts.main')

@section('title', ' Add Comic')

@section('content')
    <div class="card m-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-title d-flex justify-content-between align-items-center">
            <h2 class="p-3">Aggiungi Fumetto</h2>
            <a class="btn btn-success me-4" href="{{ route('heroes.index') }}">Indietro</a>
        </div>
        <div class="card-body">
            <form action="{{ route('heroes.store') }}" method="POST" novalidate>
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title">Titolo</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="Inserisci titolo" value="{{ old('title') }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="thumb">Immagine</label>
                            <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                                name="thumb" placeholder="Inserisci immagine" value="{{ old('thumb') }}" required>
                            @error('thumb')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="price">Prezzo</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" placeholder="Inserisci prezzo" value="{{ old('price') }}" required>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="sale_date">Data</label>
                            <input type="date" class="form-control @error('sale_date') is-invalid @enderror"
                                id="sale_date" name="sale_date" placeholder="Inserisci data" value="{{ old('sale_date') }}"
                                required>
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="type">Tipologia</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                                name="type" placeholder="Inserisci tipologia" value="{{ old('type') }}" required>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="artists">Artisti</label>
                            <textarea type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists"
                                placeholder="Inserisci artisti" value="{{ old('artists') }}" required></textarea>
                            @error('artists')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="writers">Scrittori</label>
                            <textarea type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers"
                                placeholder="Inserisci scrittori" value="{{ old('writers') }}" required></textarea>
                            @error('writers')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="description">Descrizione</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Inserisci descrizione"
                                id="description" name="description" style="height: 100px" value="{{ old('description') }}" required></textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
