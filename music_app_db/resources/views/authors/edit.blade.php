@extends('layout')

@section('content')
<h1>Редактировать автора</h1>

<form action="{{ route('authors.update', $author) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Имя:</label>
    <input type="text" name="name" value="{{ $author->name }}" required>
    <button type="submit">Сохранить</button>
</form>
@endsection