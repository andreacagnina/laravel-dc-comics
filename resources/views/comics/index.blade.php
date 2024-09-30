@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="content text-center d-flex justify-content-between align-items-center">
                    <div>
                        <h1>Comics</h1>
                    </div>
                    <div>
                        <a href="{{ Route('comics.create') }}"><i class="fa-solid fa-plus"></i> Add</a>
                    </div>
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
                                    <td class="d-flex justify-content-between align-items-center"><a class="text-success"
                                            href="{{ route('comics.show', ['comic' => $comic->id]) }}"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a class="text-warning"
                                            href="{{ route('comics.edit', ['comic' => $comic->id]) }}"><i
                                                class="fa-solid fa-pen-to-square"></i></a>

                                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm p-0 delete"><i
                                                    class="fa-solid fa-trash text-danger"></i>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('comics.partials.modal_delete')
@endsection
