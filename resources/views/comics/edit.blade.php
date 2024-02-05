@extends('layouts.app')

@section('title')
    Laravel DC Comics - Edit Comic
@endsection

@section('main')
    <main>
        <div class="container">
            <h2>Edit Comic</h2>

            <form action="{{ route('comics.update', ['id' => $comic->id]) }}" method="POST">
              @csrf
              @method('PUT')

                {{-- Title --}}
                <div class="mb-3">
                    <label for="comicTitle" class="form-label">Title</label>
                    <input type="text" value="{{ $comic->title }}" name="title" class="form-control" id="comicTitle" aria-describedby="Title">
                    <div id="comicTitle" class="form-text">Enter the title of the comic you wish to add</div>
                </div>
                {{-- Type --}}
                <div class="mb-3">
                    <select name="type" class="form-select" aria-label="Comic type">
                        <option selected>Select comic type...</option>
                        <option value="comic book">Comic book</option>
                        <option value="graphic novel">Graphic novel</option>
                    </select>
                </div>
                {{-- Series --}}
                <div class="mb-3">
                    <label for="comicSeries" class="form-label">Series</label>
                    <input name="series" type="text" value="{{ $comic->series }}" class="form-control" id="comicSeries" aria-describedby="Series">
                    <div id="comicSeries" class="form-text">Enter the series the comic is part of</div>
                </div>
                {{-- Price --}}
                <div class="mb-3">
                    <label for="comicPrice" class="form-label">Price</label>
                    <input name="price" type="text" value="{{ $comic->price }}" class="form-control" id="comicPrice" aria-describedby="Price">
                    <div id="comicPrice" class="form-text">Enter the price of the comic you wish to add</div>
                </div>
                {{-- Cover --}}
                <div class="mb-3">
                    <label for="comicCover" class="form-label">Cover</label>
                    <input name="thumb" type="text" value="{{ $comic->thumb }}" class="form-control" id="comicCover" aria-describedby="Cover">
                    <div id="comicCover" class="form-text">Add the URL of the cover image</div>
                </div>
                {{-- Description --}}
                <div class="mb-3">
                    <label for="comicDescription" class="form-label">Description</label>
                    <textarea name="description" value="{{ $comic->description }}" class="form-control" id="comicDescription" rows="3" placeholder="Add a description of the comic..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection
