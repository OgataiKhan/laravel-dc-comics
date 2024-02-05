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
                    {{-- Comic card --}}
                    <li class="col-md-3 d-flex">
                        <div class="card d-flex flex-column" style="width: 18rem;">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                            <div class="card-body flex-grow-1">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">{{ $comic->series }}</p>
                                <div class="buttons d-flex">
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary me-2">View
                                        Details</a>
                                    <!-- Open delete confirmation modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteConfirmationModal-{{ $comic->id }}">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    {{-- Delete confirmation modal --}}
                    <div class="modal fade" id="deleteConfirmationModal-{{ $comic->id }}" tabindex="-1"
                        aria-labelledby="deleteConfirmationModalLabel-{{ $comic->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteConfirmationModalLabel-{{ $comic->id }}">Confirm
                                        Delete</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this comic?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
