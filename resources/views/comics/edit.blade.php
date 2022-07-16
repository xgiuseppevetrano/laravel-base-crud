@extends('layouts.base')

@section('title')
    Edit {{$comic["title"]}}
@endsection

@section('page-content')
    <main>
        <div class="edit">
            <div class="container">
                <div class="edit__button">
                    <a href="{{route('comics.index')}}"><button class="btn"><i class="fa-solid fa-arrow-left"></i> Comics</button></a>
                </div>
                <h1 class="edit__title">Edit {{$comic["title"]}}</h1>

                <form class="edit__form" action="{{route('comics.update', $comic["id"])}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="edit__form-box">
                        <label for="title">Title</label><br>
                        <input type="text" id="title" name="title" value="{{$comic["title"]}}">
                    </div>
                    <div class="edit__form-box">
                        <label for="image">Image</label><br>
                        <input type="text" id="image" name="image" value="{{$comic["image"]}}">
                    </div>
                    <div class="edit__form-box">
                        <label for="price">Price</label><br>
                        <input type="text" id="price" name="price" value="{{$comic["price"]}}">
                    </div>
                    <div class="edit__form-box">
                        <label for="series">Series</label><br>
                        <input type="text" id="series" name="series" value="{{$comic["series"]}}">
                    </div>
                    <div class="edit__form-box">
                        <label for="sale_date">Sale Date</label><br>
                        <input type="date" name="sale_date" id="sale_date" value="{{$comic["sale_date"]}}">
                    </div>
                    <div class="edit__form-box">
                        <label for="type">Type</label><br>
                        <select name="type" id="type">
                            <option value="comic_book" {{$comic["type"] == 'comic book' ? 'selected' : ''}}>Comic Book</option>
                            <option value="graphic_novel" {{$comic["type"] == 'graphic novel' ? 'selected' : ''}}>Graphic Novel</option>
                        </select>
                    </div>
                    <div class="edit__form-box">
                        <label for="description">Description</label><br>
                        <textarea name="description" id="description" cols="40" rows="5">{{$comic["description"]}}</textarea>
                    </div>

                    <button class="btn" type="submit">Edit</button>
                </form>
            </div>    
        </div>
    </main>
@endsection