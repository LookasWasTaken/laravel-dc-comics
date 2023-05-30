@extends("layouts.app")

@section("content")
<div class="container py-5">
@if(Session::has('edited'))
    <div class="alert alert-warning alert-dismissible fade show text-center fw-bold my-3" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <span>{{Session::get('edited')}}</span>
    </div>
    @endif
    <h4 class="text-warning mx-auto my-2 text-center text-uppercase">You are watching the item #{{$comic -> id}}</h4>
    <div class="d-flex justify-content-center align-items-center my-3 gap-3">
        <a class="btn btn-warning text-uppercase fw-bold" href="{{route('comics.edit', $comic->id)}}">edit</a>
        <a class="btn btn-secondary text-uppercase fw-bold" href="{{route('comics.index')}}">back</a>
        <button type="button" class="btn btn-danger text-uppercase fw-bold" data-bs-toggle="modal" data-bs-target="#modal-{{$comic->id}}">delete</button>
                        <div class="modal fade" id="modal-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$comic->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex flex-column">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                        <h5 class="text-muted fs-6 text-uppercase">You are going to delete</h5>
                                        <h5 class="modal-title mb-2 text-uppercase fw-bold" id="modalTitle-{{$comic->id}}">{{$comic->title}}</h5>
                                        <h5 class="modal-title mb-2 fs-6 text-muted" id="modalTitle-{{$comic->id}}">No. {{$comic->id}}</h5>
                                        <img width="120" src="{{$comic->thumb}}" alt="">
                                    </div>
                                    <div class="modal-body">
                                        <p class="mb-0 text-danger text-uppercase">Once confirmed, there</p>
                                        <p class="mb-0 text-danger text-uppercase">will be no going back</p>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center align-items-center gap-2">
                                        <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="close">Return</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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