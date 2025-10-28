@extends('layouts.app')

@section('title', 'Редактировать объявление')
@section('content')
    <h1>Редактировать объявление</h1>
    <form action="{{ route('billboard.update', $billboard) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group mb-3">
            <label for="title">Название</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $billboard->title }}">
        </div>
        <div class="form-group mb-3">
            <label for="content">Описание</label>
            <textarea name="content" class="form-control" id="content">{{ $billboard->content }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="price">Цена</label>
            <input type="number" min="0" onchange="this.value = Math.abs(this.value)" name="price" class="form-control" id="price" value="{{ $billboard->price }}">
        </div>
        <button type="submit" class="btn btn-primary">Применить изменения</button>
    </form>
@endsection