@extends('layouts.app')

@section('title')
    Laravel DC Comics - {{ $comic->title }}
@endsection

@section('main')
    <main>
        <div class="container">
            <h2>{{ $comic->title }}</h2>
        </div>
    </main>
@endsection
