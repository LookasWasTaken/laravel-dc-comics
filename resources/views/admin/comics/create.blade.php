@extends('layouts.app')

@section("content")
<div class="container">
  @include('partials.validation')
  <form class="text-light p-5 bg-dark m-3 rounded" action="{{route('comics.store')}}" method="post">
    @csrf
    <div class="mb-3 row">
      <label for="title" class="col-3 col-form-label text-uppercase">title:</label>
      <div class="col-6">
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" required placeholder="only title there" value="{{old('title')}}">
      </div>
      @error('title')
      <div class="alert alert-danger p-3 m-3 text-center" role="alert">
        <strong>error : </strong>{{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3 row">
      <label for="description" class="col-3 col-form-label text-uppercase">description</label>
      <div class="col-6">
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" required placeholder="only description there" value="{{old('description')}}"></textarea>
      </div>
      @error('description')
      <div class="alert alert-danger p-3 m-3 text-center" role="alert">
        <strong>error : </strong>{{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3 row">
      <label for="thumb" class="col-3 col-form-label text-uppercase">thumb</label>
      <div class="col-6">
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" required placeholder="only thumb there" value="{{old('thumb')}}">
      </div>
      @error('thumb')
      <div class="alert alert-danger p-3 m-3 text-center" role="alert">
        <strong>error : </strong>{{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3 row">
      <label for="price" class="col-3 col-form-label text-uppercase">price</label>
      <div class="col-6">
        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" required placeholder="only price there in $" value="{{old('price')}}">
      </div>
      @error('price')
      <div class="alert alert-danger p-3 m-3 text-center" role="alert">
        <strong>error : </strong>{{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3 row">
      <label for="series" class="col-3 col-form-label text-uppercase">series</label>
      <div class="col-6">
        <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" required placeholder="only series there" value="{{old('series')}}">
      </div>
      @error('series')
      <div class="alert alert-danger p-3 m-3 text-center" role="alert">
        <strong>error : </strong>{{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3 row">
      <label for="sale_date" class="text-uppercase col-3 col-form-label">sold yyyy-mm-dd</label>
      <div class="col-6">
        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" required placeholder="only date there" value="{{old('sale_date')}}">
      </div>
      @error('sale_date')
      <div class="alert alert-danger p-3 m-3 text-center" role="alert">
        <strong>error : </strong>{{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3 row">
      <label for="type" class="col-3 col-form-label text-uppercase">type</label>
      <div class="col-6">
        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" required placeholder="only type there" value="{{old('type')}}">
      </div>
    </div>
    @error('type')
      <div class="alert alert-danger p-3 m-3 text-center" role="alert">
        <strong>error : </strong>{{$message}}
      </div>
      @enderror
    <div>
      <div class="text-center d-flex justify-content-center align-items-center gap-3">
        <button type="submit" class="btn btn-primary text-uppercase">ADD</button>
        <button type="reset" class="btn btn-danger text-uppercase">RESET</button>
        <a class="btn btn-secondary text-uppercase" href="{{route('comics.index')}}">back</a>
      </div>
    </div>
  </form>
</div>
@endsection