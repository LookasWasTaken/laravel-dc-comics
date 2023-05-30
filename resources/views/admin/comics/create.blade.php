@extends('layouts.app')

@section("content")
<div class="container">
  <form class="text-light p-5 bg-dark m-3 rounded" action="{{route('comics.store')}}" method="post">
    @csrf
    <div class="mb-3 row">
      <label for="title" class="col-3 col-form-label text-uppercase">title:</label>
      <div class="col-6">
        <input type="text" class="form-control" name="title" id="title" placeholder="only title there">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="description" class="col-3 col-form-label text-uppercase">description</label>
      <div class="col-6">
        <textarea class="form-control" name="description" id="description" placeholder="only description there"></textarea>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="thumb" class="col-3 col-form-label text-uppercase">thumb</label>
      <div class="col-6">
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="only thumb there">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="price" class="col-3 col-form-label text-uppercase">price</label>
      <div class="col-6">
        <input type="text" class="form-control" name="price" id="price" placeholder="only price there in $">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="series" class="col-3 col-form-label text-uppercase">series</label>
      <div class="col-6">
        <input type="text" class="form-control" name="series" id="series" placeholder="only series there">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="sale_date" class="text-uppercase col-3 col-form-label">sold yyyy-mm-dd</label>
      <div class="col-6">
        <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="only date there">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="type" class="col-3 col-form-label text-uppercase">type</label>
      <div class="col-6">
        <input type="text" class="form-control" name="type" id="type" placeholder="only type there">
      </div>
    </div>
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