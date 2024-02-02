@extends('layouts.app')

@section('title')
    Laravel DC Comics - New Comic
@endsection

@section('main')
    <main>
        <div class="container">
            <h2>Create</h2>

            <form action="{{ route('comics.store') }}" method="POST">
              @csrf
                <div class="mb-3">
                    <label for="comicTitle" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="comicTitle" aria-describedby="Title">
                    <div id="comicTitle" class="form-text">Enter the title of the comic you wish to add</div>
                </div>
                <div class="mb-3">
                    <select name="type" class="form-select" aria-label="Comic type">
                        <option selected>Select comic type...</option>
                        <option value="comic book">Comic book</option>
                        <option value="graphic novel">Graphic novel</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="comicSeries" class="form-label">Series</label>
                    <input name="series" type="text" class="form-control" id="comicSeries" aria-describedby="Series">
                    <div id="comicSeries" class="form-text">Enter the series the comic is part of</div>
                </div>
                <div class="mb-3">
                    <label for="comicPrice" class="form-label">Price</label>
                    <input name="price" type="text" class="form-control" id="comicPrice" aria-describedby="Price">
                    <div id="comicPrice" class="form-text">Enter the price of the comic you wish to add</div>
                </div>
                <div class="mb-3">
                    <label for="comicCover" class="form-label">Cover</label>
                    <input name="thumb" type="text" class="form-control" id="comicCover" aria-describedby="Cover">
                    <div id="comicCover" class="form-text">Add the URL of the cover image</div>
                </div>
                <div class="mb-3">
                    <label for="comicDescription" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="comicDescription" rows="3" placeholder="Add a description of the comic..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection
