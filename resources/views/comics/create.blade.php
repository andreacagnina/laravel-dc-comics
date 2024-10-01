@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <form action="{{ route('comics.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="title">Title</label>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
                                id="title" autocomplete="off" value="{{ old('title') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="author">Author</label>
                            <input class="form-control @error('author') is-invalid @enderror" type="text" name="author"
                                id="author" autocomplete="off" value="{{ old('author') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                                id="description" autocomplete="off">value="{{ old('description') }}"</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="price">Price</label>
                            <input class="form-control @error('price') is-invalid @enderror" type="number" name="price"
                                id="price" autocomplete="off" value="{{ old('price') }}">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="release_date">Release Date</label>
                            <input class="form-control @error('release_date') is-invalid @enderror" type="date"
                                name="release_date" id="release_date" autocomplete="off" value="{{ old('release_date') }}">

                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="type">Type</label>
                            <input class="form-control @error('type') is-invalid @enderror" type="text" name="type"
                                id="type" autocomplete="off" value="{{ old('type') }}">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-primary">Conferma</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
