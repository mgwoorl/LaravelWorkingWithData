@extends('layout')

@section('content')
<h1>Добавить автора</h1>

<form action="{{ route('authors.store') }}" method="POST">
    @csrf
    <label for="name">Имя:</label>
    <input type="text" name="name" required>
    <button type="submit">Добавить</button>
</form>
@endsection