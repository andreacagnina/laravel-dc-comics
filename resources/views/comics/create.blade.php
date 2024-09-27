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
                            <input class="form-control" type="text" name="title" id="title">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="author">Author</label>
                            <input class="form-control" type="text" name="author" id="author">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control" name="description" id="description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="price">Price</label>
                            <input class="form-control" type="text" name="price" id="price">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="release_Date">Release Date</label>
                            <input class="form-control" type="text" name="release_Date" id="release_Date">

                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="type">Type</label>
                            <input class="form-control" type="text" name="type" id="type">
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
