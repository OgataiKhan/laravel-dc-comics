@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <ul>
                @foreach ($comics as $comic)
                    <li>{{ $comic->title }}</li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection