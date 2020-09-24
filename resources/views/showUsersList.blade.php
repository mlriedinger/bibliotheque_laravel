@extends('layouts.app')

@section('content')
    <div class="content">
        <h1 class="title text-center mb-5 mt-5 text-uppercase">
            Liste des emprunteurs
        </h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    @foreach ($users as $user)
                        <div class="card mb-4 text-center">
                        <div class="card-header text-white bg-info">{{ $user->name }} {{ $user->firstname}}</div>

                            <div class="card-body text-center">
                                <p>Email : {{ $user->email }}</p>
                                <p>Téléphone : {{ $user->phone }}</p>
                                <button type="button" class="btn btn-light">Modifier</button>
                            </div>
                        </div>
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
