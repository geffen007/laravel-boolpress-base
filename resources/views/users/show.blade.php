@extends('layouts.app')
@section('content')
    user index
<h2>Dettagli utente</h2>
    <ul>
        <li>{{ $user->name}}</li>
        <li>{{ $user->email}}</li>
        <li><img src="{{ $user->info->avatar }}" alt=""></li>
        <li>{{ $user->info->telephon }}</li>
    </ul>

<h3>Review che ha scritto</h3>

<form action="{{ route('users.destroy', $user->id) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Cancella Utente">
</form>

@foreach ($user->reviews as $review)
    <div class="">
        <p>Titolo: {{$review->title}}</p>
        <p>Testo: {{$review->textReview}}</p>
    </div>
@endforeach

@endsection
