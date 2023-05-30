@extends("layouts.app")

@section("content")
<div class="container p-5">
    <h2 class="text-center text-warning text-uppercase">you are currently editing the item #{{$comic->id}}</h2>
    <h2 class="text-center text-warning text-uppercase">{{$comic->title}}</h2>
    <form action="{{route('comics.update', $comic->id)}}" method="post" class="text-light bg-dark rounded p-5">
        @csrf
        @method("put")
        <div class="mb-3 w-50">
            <label for="title" class="form-label text-uppercase">title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="only title there" aria-describedby="titleHelper" value="{{$comic->title}}">
            <small id="titleHelper" class="text-muted text-uppercase">insert the title</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-uppercase">description</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="only description there">{{$comic-> description}}</textarea>
            <small id="descriptionHelper" class="text-muted text-uppercase">Insert the description</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">COVER IMAGE PATH</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="only thumb path there" aria-describedby="thumbHelper" value="{{$comic->thumb}}">
            <small id="thumbHelper" class="text-muted text-uppercase">Insert path there</small>
        </div>
        <div class="mb-3 w-50">
            <label for="price" class="form-label text-uppercase">price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="only price there" aria-describedby="priceHelper" value="{{$comic->price}}">
            <small id="priceHelper" class="text-muted text-uppercase">Insert price there</small>
        </div>
        <div class="mb-3 w-50">
            <label for="series" class="form-label text-uppercase">series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="only serie there" aria-describedby="seriesHelper" value="{{$comic->series}}">
            <small id="seriesHelper" class="text-muted text-uppercase">Insert serie there</small>
        </div>
        <div class="mb-3 w-50">
            <label for="sale_date" class="form-label text-uppercase">sale date</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="only date there" aria-describedby="sale_dateHelper" value="{{$comic->sale_date}}">
            <small id="sale_dateHelper" class="text-muted text-uppercase">Insert date there</small>
        </div>
        <div class="mb-3 w-50">
            <label for="type" class="form-label text-uppercase">type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="only type there" aria-describedby="typeHelper" value="{{$comic->type}}">
            <small id="typeHelper" class="text-muted text-uppercase">Insert type there</small>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary mx-3">Save</button>
            <button type="reset" class="btn btn-danger mx-3">Reset</button>
        </div>
    </form>
</div>
@endsection