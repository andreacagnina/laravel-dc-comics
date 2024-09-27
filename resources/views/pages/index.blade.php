@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Comics</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Autore</th>
                            <th>Descrizione</th>
                            <th>Prezzo</th>
                            <th>Data di rilascio</th>
                            <th>Tipologia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <td>{{ $comic->id }}</td>
                                <td>{{ $comic->title }}</td>
                                <td>{{ $comic->author }}</td>
                                <td>{{ $comic->description }}</td>
                                <td>{{ $comic->price }}</td>
                                <td>{{ $comic->release_date }}</td>
                                <td>{{ $comic->type }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
