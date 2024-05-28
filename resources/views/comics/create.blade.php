@extends('layouts.app')

@section('title', 'Create Comic')

@section('content')
<main>
    <h1>Create Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>

        <label for="thumb">Thumbnail URL:</label>
        <input type="url" id="thumb" name="thumb" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>

        <label for="series">Series:</label>
        <input type="text" id="series" name="series" required>

        <label for="sale_date">Sale Date:</label>
        <input type="date" id="sale_date" name="sale_date" required>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required>

        <button type="submit">Create</button>
    </form>
</main>
@endsection
