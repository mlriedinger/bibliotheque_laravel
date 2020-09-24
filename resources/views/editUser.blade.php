@extends('layouts.app')

@section('content')
    <div class="content">
        <h1 class="title text-center mb-5 mt-5 text-uppercase">
            Détails de l'emprunteur
        </h1>
        <div class="container">

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="userName">Nom</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="userName" value=" {{ $user->name }}" />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>

                <div class="form-group">
                    <label for="userFirstName">Prénom</label>
                    <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="userFirstName" name="firstname"
                        value=" {{ $user->firstname }}" />
                        @error('firstname')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="email">Adresse mail</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        value=" {{ $user->email }}" />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value=" {{ $user->phone }}" />
                </div>

                <div class="form-group">
                    <label for="createdAt">Date de création</label>
                    <input type="text" readonly class="form-control" id="createdAt" value=" {{ $user->created_at }}" />
                </div>

                <div class="form-group">
                    <label for="updatedAt">Date dernière mise à jour</label>
                    <input type="text" readonly class="form-control" id="updatedAt" value=" {{ $user->updated_at }}" />
                </div>

                <div class="col text-center">
                    <input type="submit" class="btn btn-dark" />
                    <input type="reset" class="btn btn-light">
                </div>

            </form>

        </div>
    </div>
@endsection
