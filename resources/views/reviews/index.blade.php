@extends('layouts.app')
@section('content')

    @if (session('status_created'))
        <div class="alert alert-success">
            <p>{{ session('status_created') }}</p>
        </div>
    @endif

    <h2>elenco Recensioni</h2>
    @foreach ($reviews as $review)
        <div class="">
            <p>Titolo: {{$review->title}}</p>
            <p>Testo: {{$review->textReview}}</p>
        </div>
    @endforeach

@endsection
