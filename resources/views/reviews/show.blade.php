@extends('layouts.app')
@section('content')
    user index
<h2>Recensione</h2>
    <ul>
        <li>{{ $review->title}}</li>
        <li>{{ $review->textReview}}</li>
    </ul>


<form action="{{ route('reviews.destroy', $review->id) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Cancella recensione">
</form>

@endsection
