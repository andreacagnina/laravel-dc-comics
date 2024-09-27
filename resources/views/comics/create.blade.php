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
                            <input class="form-control" type="text" name="title" id="title" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="author">Author</label>
                            <input class="form-control" type="text" name="author" id="author" autocomplete="off">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" autocomplete="off"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="price">Price</label>
                            <input class="form-control" type="number" name="price" id="price" autocomplete="off">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="release_date">Release Date</label>
                            <input class="form-control" type="date" name="release_date" id="release_date"
                                autocomplete="off">

                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="type">Type</label>
                            <input class="form-control" type="text" name="type" id="type" autocomplete="off">
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
