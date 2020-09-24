@extends('layouts.app')

@section('content')
    <div class="content">
        <h1 class="title text-center mb-5 mt-5 text-uppercase">
            Détails
        </h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">

                    <div class="card mb-4 text-center">
                        <div class="card-header text-white bg-info">{{ $book->title }}</div>

                        <div class="card-body text-center">
                            <p>Auteur : {{ $book->author }}</p>
                            <p>N°ISBN : {{ $book->isbn }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row justify-content-center">
                <a href="{{ route('bookList') }}"><button type="button" class="btn btn-dark mb-5">Retour à la
                        liste</button></a>
            </div>


            <div class="row justify-content-center">
                <div class="col text-center">
                    <h2>Historique des emprunts</h2>
                    @foreach ($loanHistory as $loan)
                        <p>Nom et prénom de l'emprunteur : {{ $loan->name }} {{ $loan->firstname }} </p>
                        <p>Date d'emprunt : {{ $loan->loan_start }} | Date de retour prévue : {{ $loan->loan_end }} | Date de retour effective : {{ $loan->book_return }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
