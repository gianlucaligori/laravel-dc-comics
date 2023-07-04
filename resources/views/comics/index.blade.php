@extends('comics')

@section('contents')
    <h1 class="text-center">Comics</h1>

    @if (session('delete_completed'))
        @php $comic = session('delete_completed') @endphp
        <div class="alert alert-danger">
            Il film "{{ $comic->title }}" è stata eliminato
        </div>
    @endif

    <div class="container">
        <div class="row row-cols-3">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top image-fluid" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $comic->series }}</li>
                            <li class="list-group-item">{{ $comic->sale_date }}</li>
                            <li class="list-group-item">{{ $comic->type }}</li>
                        </ul>
                        <div class="card-body">
                            <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">VIEW</a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">CREATE
                                NEW</a>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST"
                                class="d-inline-block">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">DELETE</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $comics->links() }}
@endsection
