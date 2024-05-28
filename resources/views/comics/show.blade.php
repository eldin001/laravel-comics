@extends('layouts.app')

@section('title', 'Comic Details')

@section('content')
<main>
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <p>{{ $comic->description }}</p>
    <!-- Altri dettagli del comic -->
    <a href="{{ route('comics.index') }}">Back to All Comics</a>
</main>
@endsection
