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
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="author">Author</label>
                            <input class="form-control @error('author') is-invalid @enderror" type="text" name="author"
                                id="author" autocomplete="off" value="{{ old('author') }}">
                            @error('author')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                autocomplete="off">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="price">Price</label>
                            <div class="input-group">
                                <span class="input-group-text" id="inputGroupPrepend2">&euro;</span>
                                <input class="form-control @error('price') is-invalid @enderror" type="number"
                                    name="price" id="price" autocomplete="off" value="{{ old('price') }}">
                            </div>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="release_date">Release Date</label>
                            <input class="form-control @error('release_date') is-invalid @enderror" type="date"
                                name="release_date" id="release_date" autocomplete="off"
                                value="{{ old('release_date', Carbon\Carbon::now()->format('Y-m-d')) }}">
                            @error('release_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="type">Type</label>
                            <input class="form-control @error('type') is-invalid @enderror" type="text" name="type"
                                id="type" autocomplete="off" value="{{ old('type') }}">
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
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
