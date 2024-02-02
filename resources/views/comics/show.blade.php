@extends('layouts.app')

@section('title')
    Laravel DC Comics - {{ $comic->title }}
@endsection

@section('main')
    <main>
        <div class="container">
            <h2>{{ $comic->title }}</h2>

            <p><a href="{{ route('comics.index') }}">Go to comics list</a></p>
        </div>
    </main>
@endsection
