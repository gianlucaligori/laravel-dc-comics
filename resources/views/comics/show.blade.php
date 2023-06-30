@extends('comics')

@section('contents')
    <h1 class="text-center">Comics</h1>
    <div class="container">
        <div class="row row-cols-3">

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
                        <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">View</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
