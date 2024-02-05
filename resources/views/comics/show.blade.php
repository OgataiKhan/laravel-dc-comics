@extends('layouts.app')

@section('title')
    Laravel DC Comics - {{ $comic->title }}
@endsection

@section('main')
    <main>
        <div class="container">
            <h2>{{ $comic->title }}</h2>

            <div class="details d-flex justify-content-between">
                <div class="info">
                    <h4 class="series">{{ $comic->series }}</h4>
                    <p class="type bold"> {{ Str::ucfirst($comic->type) }}</p>
                    <p class="price"><span class="bold">Price:</span>: {{ $comic->price }}</p>
                    <p class="sale-date"><span class="bold">Sale date:</span> {{ $comic->sale_date }}</p>
                    <p class="artists"><span class="bold">Artists:</span>
                        @php $artists = explode(',', $comic->artists); @endphp
                        @foreach ($artists as $artist)
                            {{ $loop->first ? '' : ', ' }}{{ $artist }}
                        @endforeach
                    </p>
                    <p class="writers"><span class="bold">Writers:</span>
                      @php $writers = explode(',', $comic->writers); @endphp
                      @foreach ($writers as $writer)
                          {{ $loop->first ? '' : ', ' }}{{ $writer }}
                      @endforeach
                  </p>
                  <p class="description">{{ $comic->description }}</p>
                  {{-- Edit link --}}
                  <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Edit Comic</a>
                </div>
                <div class="cover-box">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                </div>
            </div>

            <p><a href="{{ route('comics.index') }}">Go to comics list</a></p>
        </div>
    </main>
@endsection
