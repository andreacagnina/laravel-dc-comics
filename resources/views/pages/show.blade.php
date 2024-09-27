@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="content text-center">
                    <h1 class="text-capitalize">{{ $comic->title }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Autore</th>
                                <th>Descrizione</th>
                                <th>Data di rilascio</th>
                                <th>Tipologia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $comic->author }}</td>
                                <td>{{ $comic->description }}</td>
                                <td>{{ $comic->release_date }}</td>
                                <td>{{ $comic->type }}</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
