@extends('layouts.app')

@section('content')
    <div class="content">
        <h1 class="title text-center mb-5 text-uppercase">
            Liste de livres
        </h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    @foreach ($books as $book)
                        <div class="card mb-4 text-center">
                            <div class="card-header text-white bg-dark">{{ $book->title }}</div>

                            <div class="card-body text-center">
                                <p>Auteur : {{ $book->author }}</p>
                                <p>N°ISBN : {{ $book->isbn }}</p>
                                <a href="{{route('showBookDetails', $book->id)}}"><button type="button" class="btn btn-light">Détails</button></a>
                                <button type="button" class="btn btn-dark">Réserver</button>
                            </div>
                        </div>
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
