@extends('layouts/app')

@section('content')
<section id="card_section">
<div class="container">
    <div class="row">
        @foreach($comics as $comic)
        <div class="col-2 g-3">
            <div class="card border-0">
            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{$comic['title']}} Logo">
            <p class="text-light">{{$comic['title']}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>
@endsection