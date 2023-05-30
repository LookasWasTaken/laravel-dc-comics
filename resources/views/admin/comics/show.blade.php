@extends("layouts.app")

@section("content")
<div class="container py-5">
    <h4 class="text-warning mx-auto my-2 text-center text-uppercase">You are watching the item #{{$comic -> id}}</h4>
    <div class="d-flex justify-content-center align-items-center my-3 gap-3">
        <a class="btn btn-warning text-uppercase fw-bold" href="{{route('comics.edit', $comic->id)}}">edit</a>
        <a class="btn btn-secondary text-uppercase fw-bold" href="{{route('comics.index')}}">back</a>
    </div>
    <div class="card w-50 mx-auto">
        <div class="card-header rounded">
            <h2 class="fw-bold">{{$comic->title}}</h2>
            <h6 class="fw-bold">Series:
                <span class="fw-normal">{{$comic->series}}</span>
            </h6>
            <h6 class="fw-bold">Sale date:
                <span class="fw-normal">{{ $comic->sale_date}}</span>
            </h6>
            <h6 class="fw-bold">Type:
                <span class="fw-normal text-capitalize">{{$comic->type}}</span>
            </h6>
            <h6 class="fw-bold">Price:
                <span class="fw-normal">{{$comic->price}}</span>
            </h6>
        </div>
        <div class="card-body">
            <img src="{{ $comic -> thumb }}" alt="" class="card-img-top">
        </div>
        <div class="card-footer">
            <p class="fw-light">{{$comic->description}}</p>
        </div>
    </div>
</div>
@endsection