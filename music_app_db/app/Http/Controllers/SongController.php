<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Author;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::with('author')->get();
        return view('songs.index', compact('songs'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('songs.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required', 'author_id' => 'required']);
        Song::create($request->all());
        return redirect()->route('songs.index');
    }

    public function edit(Song $song)
    {
        $authors = Author::all();
        return view('songs.edit', compact('song', 'authors'));
    }

    public function update(Request $request, Song $song)
    {
        $request->validate(['title' => 'required', 'author_id' => 'required']);
        $song->update($request->all());
        return redirect()->route('songs.index');
    }

    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index');
    }
}