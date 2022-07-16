@extends('layouts.base')

@section('title')
    Dc Comics
@endsection

@section('page-content')
    <main>
        <div class="index">
            <div class="container">
                <a href="{{route('home')}}"><button class="btn"><i class="fa-solid fa-arrow-left"></i> Welcome</button></a>
                <a href="{{route('comics.create')}}"><button class="btn"><i class="fa-solid fa-plus"></i> Create</button></a>

                <div class="index__list">
                    @foreach ($comics as $id => $comic)
                        <a href="{{route('comics.show', $comic["id"])}}" class="index__card">
                            <img class="index__card-img" src="{{asset($comic["image"])}}" alt="{{$comic["title"]}}">
                            <small class="index__card-text">{{$comic["title"]}}</small>
                        </a>
                    @endforeach
                </div>
            </div>    
        </div>
    </main>
@endsection