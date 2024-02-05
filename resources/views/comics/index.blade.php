@extends('layouts.app')

@section('title')
    Laravel DC Comics
@endsection

@section('main')
    <main>
        <div class="container">
            <p class="text-center"><a href="{{ route('comics.create') }}">Add new comic</a></p>
            <ul class="row gy-4">
                @foreach ($comics as $comic)
                    <li class="col-md-3 d-flex">
                        <div class="card d-flex flex-column" style="width: 18rem;">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                            <div class="card-body flex-grow-1">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">{{ $comic->series }}</p>
                                <div class="buttons d-flex">
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary me-2">View
                                        details</a>
                                    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
