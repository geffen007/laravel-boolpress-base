@extends('layouts.app')
@section('content')
    <h2>elenco Recensioni</h2>
    @foreach ($reviews as $review)
        <div class="">
            <p>Titolo: {{$review->title}}</p>
            <p>Testo: {{$review->textReview}}</p>
        </div>
    @endforeach

@endsection
