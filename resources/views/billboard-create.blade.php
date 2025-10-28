@extends('layouts.app')

@section('title', 'Добавить объявление')
@section('content')
    <h1>Добавить объявление</h1>
    <form action="{{ route('billboard.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Название</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="form-group mb-3">
            <label for="content">Описание</label>
            <textarea name="content" class="form-control" id="content"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="price">Цена</label>
            <input type="number" min="0" onchange="this.value = Math.abs(this.value)" name="price" class="form-control" id="price">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection