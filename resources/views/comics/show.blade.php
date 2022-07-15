@extends('layouts.base')

@section('title')
    Comic
@endsection

@section('page-content')
    <main>
        <div class="show">
            <div class="container">
                <div class="show__box">
                    <div class="show__dx">
                        <h1 class="show__title">{{$comic["title"]}}</h1>
                        <div class="show__store">
                            <div class="show__store-dx">
                                <span>U.S. Price: <span class="show__store-price">{{$comic["price"]}}</span></span>
                                <span class="show__store-available">Available</span>
                            </div>
                            <div class="show__store-sx">
                                <span>{{$comic["sale_date"]}}</span>
                            </div>
                        </div>
                        <p class="show__description">{{$comic["description"]}}</p>
                    </div>
                    <div class="show__sx">
                        <img class="show__sx-img" src="{{$comic["image"]}}" alt="{{$comic["title"]}}">
                    </div>
                </div>
                <div class="show__button">
                    <a href="{{route('comics.index')}}"><button class="btn">Back to home</button></a>
                </div>
            </div>
        </div>
    </main>
@endsection