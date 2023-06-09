@extends('layouts.app')

@section("content")
<div class="container">
    @if(Session::has('added'))
    <div class="alert alert-success alert-dismissible fade show text-center fw-bold my-3" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <span>{{Session::get('added')}}</span>
    </div>
    @elseif(Session::has('deleted'))
    <div class="alert alert-danger alert-dismissible fade show text-center fw-bold my-3" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <span>{{Session::get('deleted')}}</span>
    </div>
    @endif
    <a name="add" id="add" class="text-uppercase btn btn-primary my-3" href="{{ route('comics.create') }}" role="button">add new comic</a>
    <p class="text-uppercase fw-bold text-warning">results shown in descending order</p>

    <div class="table-responsive pb-3 rounded">
        <table class="table table-primary m-0">
            <thead>
                <tr class="text-uppercase">
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">Image</th>
                    <th class="text-center" scope="col">Title</th>
                    <th class="text-center" scope="col">Description</th>
                    <th class="text-center" scope="col">Price</th>
                    <th class="text-center" scope="col">Series</th>
                    <th class="text-center" scope="col">Sale date</th>
                    <th class="text-center" scope="col">Type</th>
                    <th class="text-center" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comicsDB as $comic)
                <tr>
                    <td class="text-center align-middle" width="5%" scope="row">
                        <span class="badge rounded-pill text-bg-dark">{{$comic->id}}</span>
                    </td>
                    <td class="text-center align-middle" width="10%">
                        <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}} image">
                    </td>
                    <td class="text-center align-middle">{{$comic->title}}</td>
                    <td class="text-left align-middle">{{$comic->description}}</td>
                    <td class="text-center align-middle">
                        <span class="badge rounded-pill text-bg-success">{{$comic->price}}</span>
                    </td>
                    <td class="text-center align-middle">{{$comic->series}}</td>
                    <td class="text-center align-middle" width="8%">
                        <span class="badge rounded-pill text-bg-warning">{{$comic->sale_date}}</span>
                    </td>
                    <td class="text-center align-middle" width="10%">
                        <span class="badge rounded-pill text-bg-light">{{$comic->type}}</span>
                    </td>
                    <td class="text-center align-middle">
                        <a class="btn btn-primary" href="{{route('comics.show', $comic->id)}}">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a class="btn btn-success my-3" href="{{route('comics.edit', $comic->id)}}">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$comic->id}}">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
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
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection