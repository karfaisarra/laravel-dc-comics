@extends('layouts.app')


@section('content')
<div class="container">
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="mt-3">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        <div class="mt-3">
            <label for="thumb">Image:</label>
            <input class="form-control" type="text" name="thumb" id="thumb">
        </div>
        <div class="mt-3">
            <label for="price">Price:</label>
            <input class="form-control" type="text" name="price" id="price">
        </div>
        <div class="mt-3">
            <label for="sale_date">Sale Date:</label>
            <input class="form-control" type="text" name="sale_date" id="sale_date">
        </div>
        <div class="mt-3">
            <label for="series">Series:</label>
            <input class="form-control" type="text" name="series" id="series">
        </div>
        <div class="mt-3">
            <label for="type">Type:</label>
            <input class="form-control" type="text" name="type" id="type">
        </div>
        <div class="my-3">
            <label for="type">Description:</label>
            <textarea class="form-control" name="description" id="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Crea Nuovo Elemento</button>
    </form>
</div>
@endsection