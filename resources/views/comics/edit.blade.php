@extends('layouts.app')

@section('title')
    Laravel DC Comics - Edit Comic
@endsection

@section('main')
    <main>
        <div class="container">
            <h2>Edit Comic</h2>

            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
              @csrf
              @method('PUT')

                {{-- Title --}}
                <div class="mb-3">
                    <label for="comicTitle" class="form-label">Title</label>
                    <input type="text" value="{{ old('title', $comic->title) }}" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="comicTitle" aria-describedby="Title">
                    <div id="titleHelp" class="form-text">Enter the title of the comic you wish to edit</div>
                    @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div>
                {{-- Type --}}
                <div class="mb-3">
                    <select name="type" class="form-select {{ $errors->has('type') ? 'is-invalid' : '' }}" aria-label="Comic type">
                        <option value="">Select comic type...</option>
                        <option value="comic book" {{ old('type', $comic->type) == 'comic book' ? 'selected' : '' }}>Comic book</option>
                        <option value="graphic novel" {{ old('type', $comic->type) == 'graphic novel' ? 'selected' : '' }}>Graphic novel</option>
                    </select>
                    @if ($errors->has('type'))
                        <div class="invalid-feedback">
                            {{ $errors->first('type') }}
                        </div>
                    @endif
                </div>
                {{-- Series --}}
                <div class="mb-3">
                    <label for="comicSeries" class="form-label">Series</label>
                    <input name="series" type="text" value="{{ old('series', $comic->series) }}" class="form-control {{ $errors->has('series') ? 'is-invalid' : '' }}" id="comicSeries" aria-describedby="Series">
                    <div id="seriesHelp" class="form-text">Enter the series the comic is part of</div>
                    @if ($errors->has('series'))
                        <div class="invalid-feedback">
                            {{ $errors->first('series') }}
                        </div>
                    @endif
                </div>
                {{-- Price --}}
                <div class="mb-3">
                    <label for="comicPrice" class="form-label">Price</label>
                    <input name="price" type="text" value="{{ old('price', $comic->price) }}" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="comicPrice" aria-describedby="Price">
                    <div id="priceHelp" class="form-text">Enter the price of the comic you wish to edit</div>
                    @if ($errors->has('price'))
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </div>
                    @endif
                </div>
                {{-- Cover --}}
                <div class="mb-3">
                    <label for="comicCover" class="form-label">Cover</label>
                    <input name="thumb" type="text" value="{{ old('thumb', $comic->thumb) }}" class="form-control {{ $errors->has('thumb') ? 'is-invalid' : '' }}" id="comicCover" aria-describedby="Cover">
                    <div id="coverHelp" class="form-text">Add the URL of the cover image</div>
                    @if ($errors->has('thumb'))
                        <div class="invalid-feedback">
                            {{ $errors->first('thumb') }}
                        </div>
                    @endif
                </div>
                {{-- Description --}}
                <div class="mb-3">
                    <label for="comicDescription" class="form-label">Description</label>
                    <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="comicDescription" rows="3">{{ old('description', $comic->description) }}</textarea>
                    @if ($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection