@extends('layouts.app')
@section('content')
    @if (session('status_cancellato'))
        <div class="alert alert-success">
            <p>l'utente {{ session('status_cancellato') }} è stato cancellato</p>
        </div>
    @endif

<h2>Elenco utenti</h2>
@foreach ($users as $user)
    <ul>
        <li>{{ $user->name}}</li>
        <li>{{ $user->email}}</li>
        <li><img src="{{ $user->info->avatar }}" alt=""></li>
        <li><a href="{{ route('users.show', $user->id)}}">Dettagli</a></li>
    </ul>


@endforeach
@endsection
