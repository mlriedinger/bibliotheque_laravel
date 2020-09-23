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
                        <div class="card mb-4">
                            <div class="card-header text-white bg-info">{{ $book->title }}</div>

                            <div class="card-body">
                                <p>Auteur : {{ $book->author }}</p>
                                <p>N°ISBN : {{ $book->isbn }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
