@extends('layouts.base')

@section('title')
    Dc Comics
@endsection

@section('page-content')
    <main>
        <div class="home">
            <div class="container">
                <h1 class="home__title">Welcome to DC Comics</h1>
                <a href="{{route('comics.index')}}"><button class="btn">Discover our comics</button></a>
                <a href="{{route('comics.create')}}"><button class="btn">Create new comics</button></a>
            </div>
        </div>
    </main>
@endsection