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

                            <input class="form-control" type="text" name="title" id="title"
                                value="{{ $comic->title }}" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="author">Author</label>

                            <input class="form-control" type="text" name="author" id="author"
                                value="{{ $comic->author }}" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>

                            <textarea class="form-control" name="description" id="description" autocomplete="off">{{ $comic->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="price">Price</label>

                            <input class="form-control" type="number" name="price" id="price"
                                value="{{ $comic->price }}" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="release_date">Release Date</label>

                            <input class="form-control" type="date" name="release_date" id="release_date"
                                value="{{ $comic->release_date }}" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="type">Type</label>

                            <input class="form-control" type="text" name="type" id="type"
                                value="{{ $comic->type }}" autocomplete="off">
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
