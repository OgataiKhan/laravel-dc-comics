@extends('layouts.app')

@section('title')
    Laravel DC Comics
@endsection

@section('main')
    <main>
        <div class="container">
            <ul>
                @foreach ($comics as $comic)
                    <li>{{ $comic->title }} - <a href="{{ route('comics.show', $comic->id) }}" alt="Comic">View details</a></li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection