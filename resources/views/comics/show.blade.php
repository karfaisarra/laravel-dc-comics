@extends('layouts.app')


@section('content')
<section class="py-5">
    <div class="container">
        <div class="comic">
            <div class="d-flex gap-4">
                <img class="" src="{{$comic['thumb']}}" alt="" width="200">
                <div class="details">
                    <h2>{{$comic->title}}</h2>
                    <p>{{$comic->description}}</p>
                    <ul class="list-unstyled">
                        <li>Price: {{$comic->price}}$</li>
                        <li>Series: {{$comic->series}}</li>
                        <li>Sale date: {{$comic->sale_date}}</li>
                        <li>type: {{$comic->type}}</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection