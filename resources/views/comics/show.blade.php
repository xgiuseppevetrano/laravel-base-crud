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
                                <span class="show__store-type">{{$comic["type"]}}</span>
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
                    <a href="{{route('comics.index')}}"><button class="btn"><i class="fa-solid fa-house-user"></i> Home</button></a>
                    <a href="{{route('comics.edit', $comic["id"])}}"><button class="btn"><i class="fa-solid fa-pen"></i>  Edit</button></a>
                    <form class="form" action="{{route('comics.destroy', $comic["id"])}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn"><i class="fa-solid fa-trash-can"></i> Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection