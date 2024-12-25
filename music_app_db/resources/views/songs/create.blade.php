@extends('layout')

@section('content')
<h1>Добавить песню</h1>

<form action="{{ route('songs.store') }}" method="POST">
    @csrf
    <label for="title">Название:</label>
    <input type="text" name="title" required>
    
    <label for="author_id">Автор:</label>
    <select name="author_id" required>
        @foreach($authors as $author)
        <option value="{{ $author->id }}">{{ $author->name }}</option>
        @endforeach
    </select>
    
    <button type="submit">Добавить</button>
</form>
@endsection