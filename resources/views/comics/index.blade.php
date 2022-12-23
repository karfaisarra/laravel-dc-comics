@extends('layouts.app')


@section('content')
<section class="comics bg-dark py-5">
    <div class="container">
        <div class="comics_list">
            <div class="row row-cols-6 g-4">
                @foreach($comics as $comic)
                <div class="col">
                    <div class="card border-0 rounded-0 bg-transparent">
                        <img class="card-img-top rounded-0" src="{{$comic['thumb']}}" alt="">
                        <div class="card-body">
                            <h6 class="text-uppercase text-white">{{$comic['series']}}</h6>
                        </div>
                        <div class="card-footer d-flex gap-2">
                            <a class="btn btn-secondary" href="{{route('comics.show', $comic->id)}}">Show</a>
                            <a class="btn btn-primary" href="{{route('comics.edit', ['comic' => $comic->id])}}">Edit</a>

                            <form action="{{ route('comics.destroy', ['id'=> $comic->id]) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <input type="submit" value="Delete">
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="create text-center my-5">
                <a class="btn btn-primary" href="{{route('comics.create')}}">add a new Comic</a>
            </div>
        </div>
    </div>
</section>
<section class="banner py-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <img width="70" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span class="text-uppercase text-white ps-3">Digital comics</span>
            </div>
            <div class="col d-flex align-items-center">
                <img width="70" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span class="text-uppercase text-white ps-3">Dc Merchandise</span>
            </div>
            <div class="col d-flex align-items-center">
                <img width="70" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span class="text-uppercase text-white ps-3">Subscription</span>
            </div>
            <div class="col d-flex align-items-center">
                <img width="70" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                <span class="text-uppercase text-white ps-3">Comic Shop Locator</span>
            </div>
            <div class="col d-flex align-items-center">
                <img width="70" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span class="text-uppercase text-white ps-3">Dc power visa</span>
            </div>
        </div>
    </div>
</section>
@endsection