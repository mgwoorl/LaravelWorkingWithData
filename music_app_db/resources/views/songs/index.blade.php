@extends('layout')

@section('content')
<h1>Песни</h1>
<a href="{{ route('songs.create') }}">Добавить песню</a>
<ul>
    @foreach($songs as $song)
    <li>
        {{ $song->title }} - {{ $song->author->name }}
        <a href="{{ route('songs.edit', $song) }}">Редактировать</a>
        <form action="{{ route('songs.destroy', $song) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection