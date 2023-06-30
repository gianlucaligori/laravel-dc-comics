@extends('comics')

@section('contents')
    <h1 class="text-center">Comics</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo film</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data uscita</th>
                    <th scope="col">Tipologia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <div class="card-body">
                                <a class="btn btn-primary"
                                    href="{{ route('comics.show', ['comic' => $comic->id]) }}">View</a>
                                <a class="btn btn-warning" href="">Edit</a>
                                <a class="btn btn-danger" href="">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div style=" row height: 100px; width:450px">
        <ul>{{ $comics->links() }}</ul>
    </div>
@endsection
