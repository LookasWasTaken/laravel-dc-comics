@extends("layouts.app")

@section("content")
<div class="container p-5">
    @include('partials.validation')
    <h2 class="text-center text-warning text-uppercase">you are currently editing the item #{{$comic->id}}</h2>
    <h2 class="text-center text-warning text-uppercase">{{$comic->title}}</h2>
    <form action="{{route('comics.update', $comic->id)}}" method="post" class="text-light bg-dark rounded p-5">
        @csrf
        @method("put")
        <div class="mb-3 w-50">
            <label for="title" class="form-label text-uppercase">title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" required placeholder="only title there" aria-describedby="titleHelper" value="{{old('title', $comic->title)}}">
            <small id="titleHelper" class="text-muted text-uppercase">insert the title</small>
            @error('title')
            <div class="alert alert-danger p-3 m-3" role="alert">
                <strong>error: </strong>{{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-uppercase">description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3" required placeholder="only description there" value="{{old('description', $comic->description)}}">{{$comic-> description}}</textarea>
            <small id="descriptionHelper" class="text-muted text-uppercase">Insert the description</small>
            @error('description')
            <div class="alert alert-danger p-3 m-3" role="alert">
                <strong>error: </strong>{{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <div class="d-flex flex-column justify-content-between gap-1">
                <div class="flex-grow-1 mb-3">
                <label for="thumb" class="form-label">COVER IMAGE PATH</label>
                <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" required placeholder="only thumb path there" aria-describedby="thumbHelper" value="{{old('thumb', $comic->thumb)}}">
                <small id="thumbHelper" class="text-muted text-uppercase">Insert path there</small>
                </div>
                <img class="rounded mb-0" width="200" src="{{$comic->thumb}}" alt="">
                <p class="text-muted fs-6 mt-0 pt-0">current thumb</p>
            </div>
            @error('thumb')
            <div class="alert alert-danger p-3 m-3" role="alert">
                <strong>error: </strong>{{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3 w-50">
            <label for="price" class="form-label text-uppercase">price</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" required placeholder="only price there" aria-describedby="priceHelper" value="{{old('price', $comic->price)}}">
            <small id="priceHelper" class="text-muted text-uppercase">Insert price there</small>
            @error('price')
            <div class="alert alert-danger p-3 m-3" role="alert">
                <strong>error: </strong>{{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3 w-50">
            <label for="series" class="form-label text-uppercase">series</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" required placeholder="only serie there" aria-describedby="seriesHelper" value="{{old('series', $comic->series)}}">
            <small id="seriesHelper" class="text-muted text-uppercase">Insert serie there</small>
            @error('series')
            <div class="alert alert-danger p-3 m-3" role="alert">
                <strong>error: </strong>{{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3 w-50">
            <label for="sale_date" class="form-label text-uppercase">sale date</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" required placeholder="only date there" aria-describedby="sale_dateHelper" value="{{old('sale_date', $comic->sale_date)}}">
            <small id="sale_dateHelper" class="text-muted text-uppercase">Insert date there</small>
            @error('sale_date')
            <div class="alert alert-danger p-3 m-3" role="alert">
                <strong>error: </strong>{{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3 w-50">
            <label for="type" class="form-label text-uppercase">type</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" required placeholder="only type there" aria-describedby="typeHelper" value="{{old('type', $comic->type)}}">
            <small id="typeHelper" class="text-muted text-uppercase">Insert type there</small>
            @error('type')
            <div class="alert alert-danger p-3 m-3" role="alert">
                <strong>error: </strong>{{$message}}
            </div>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary text-uppercase mx-3">Save</button>
            <button type="reset" class="btn btn-danger text-uppercase mx-3">Reset</button>
            <a class="btn btn-secondary text-uppercase mx-3" href="{{route('comics.index')}}">back</a>
        </div>
    </form>
</div>
@endsection