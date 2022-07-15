@extends('layouts.base')

@section('title')
    Dc Comics
@endsection

@section('page-content')
    <main>
        <div class="comics">
            <div class="container">
                <div class="comics__list">
                    @foreach ($comics as $id => $comic)
                        <a href="#" class="comics__card">
                            <img class="comics__card-img" src="{{asset($comic["image"])}}" alt="{{$comic["title"]}}">
                            <small class="comics__card-text">{{$comic["title"]}}</small>
                        </a>
                    @endforeach
                </div>
            </div>    
        </div>
    </main>
@endsection