@extends('layouts.app')

@section('title')
    Laravel DC Comics
@endsection

@section('main')
    <main>
        <div class="container">
            <a href="{{ route('comics.index') }}">Go to comics</a>
        </div>
    </main>
@endsection
