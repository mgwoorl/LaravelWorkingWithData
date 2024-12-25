@extends('layout')

@section('content')
<h1>Авторы</h1>
<a href="{{ route('authors.create') }}">Добавить автора</a>
<ul>
    @foreach($authors as $author)
    <li>
        {{ $author->name }}
        <a href="{{ route('authors.edit', $author) }}">Редактировать</a>
        <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection