@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="content text-center">
                    <h1>Comics</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titolo</th>
                                <th>Data di rilascio</th>
                                <th>Prezzo</th>
                                <th>Dettagli</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comics as $comic)
                                <tr>
                                    <td>{{ $comic->id }}</td>
                                    <td>{{ $comic->title }}</td>
                                    <td>{{ $comic->release_date }}</td>
                                    <td>{{ $comic->price }} &euro;</td>
                                    <td>{{ $comic->type }}</td>
                                    <td><a href="{{ route('comics.show', ['comic' => $comic->id]) }}"><i
                                                class="fa-solid fa-eye"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
