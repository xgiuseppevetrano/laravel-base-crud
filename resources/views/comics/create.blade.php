@extends('layouts.base')

@section('title')
    New Comics
@endsection

@section('page-content')
    <main>
        <div class="create">
            <div class="container">
                <div class="create__button">
                    <a href="{{route('comics.index')}}"><button class="btn"><i class="fa-solid fa-arrow-left"></i> Comics</button></a>
                </div>
                <h1 class="create__title">Create a new comic</h1>
                <form class="create__form" action="{{route('comics.store')}}" method="POST">
                    @csrf

                    <div class="create__form-box">
                        <label for="title">Title</label><br>
                        <input type="text" id="title" name="title">
                    </div>
                    <div class="create__form-box">
                        <label for="image">Image</label><br>
                        <input type="text" id="image" name="image">
                    </div>
                    <div class="create__form-box">
                        <label for="price">Price</label><br>
                        <input type="text" id="price" name="price">
                    </div>
                    <div class="create__form-box">
                        <label for="series">Series</label><br>
                        <input type="text" id="series" name="series">
                    </div>
                    <div class="create__form-box">
                        <label for="sale_date">Sale Date</label><br>
                        <input type="date" name="sale_date" id="sale_date">
                    </div>
                    <div class="create__form-box">
                        <label for="type">Type</label><br>
                        <select name="type" id="type">
                            <option value="comic_book">Comic Book</option>
                            <option value="graphic_novel">Graphic Novel</option>
                        </select>
                    </div>
                    <div class="create__form-box">
                        <label for="description">Description</label><br>
                        <textarea name="description" id="description" cols="40" rows="5"></textarea>
                    </div>

                    <button class="btn" type="submit">Create</button>
                </form>

                @if ($errors->any())
                    <div class="error">
                        <ul class="error__list">
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>    
        </div>
    </main>
@endsection