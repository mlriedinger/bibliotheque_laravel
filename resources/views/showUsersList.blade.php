@extends('layouts.app')

@section('content')
    @if (session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="content">
        <h1 class="title text-center mb-5 mt-5 text-uppercase">
            Liste des emprunteurs
        </h1>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-6">
                    @foreach ($users as $user)
                        <div class="card mb-4 text-center">
                            <div class="card-header text-white bg-dark">{{ $user->name }} {{ $user->firstname }}</div>

                            <div class="card-body text-center">
                                <p>Email : {{ $user->email }}</p>
                                <p>Téléphone : {{ $user->phone }}</p>
                                <a href="{{ route('users.edit', $user->id) }}"><button type="button"
                                        class="btn btn-dark">Modifier</button></a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button is-danger is-small">
                                        <span class="icon is-small">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
