@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="content">

                    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label" for="title">Title</label>

                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
                                id="title" value="{{ old('title', $comic->title) }}" autocomplete="off">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="author">Author</label>

                            <input class="form-control @error('author') is-invalid @enderror" type="text" name="author"
                                id="author" value="{{ old('author', $comic->author) }}" autocomplete="off">
                            @error('author')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>

                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                autocomplete="off">{{ old('description', $comic->description) }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="price">Price</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">&euro;</span>
                                <input class="form-control @error('price') is-invalid @enderror" type="number"
                                    min="0" name="price" id="price" value="{{ old('price', $comic->price) }}"
                                    autocomplete="off">
                            </div>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="release_date">Release Date</label>

                            <input class="form-control @error('release_date') is-invalid @enderror" type="date"
                                name="release_date" id="release_date"
                                value="{{ old('release_date', $comic->release_date) }}" autocomplete="off">
                            @error('release_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="type">Type</label>

                            <input class="form-control @error('type') is-invalid @enderror" type="text" name="type"
                                id="type" value="{{ old('type', $comic->type) }}" autocomplete="off">
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
