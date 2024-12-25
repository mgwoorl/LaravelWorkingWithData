@extends('layout')

@section('content')
<h1>Редактировать песню</h1>

<form action="{{ route('songs.update', $song) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Название:</label>
    <input type="text" name="title" value="{{ $song->title }}" required>
    <button type="submit">Сохранить</button>

    <label for="author">Автор:</label>
    <input type="text" name="title" value="{{ $song->author->name }}" required>
    <button type="submit">Сохранить</button>
</form>
@endsection