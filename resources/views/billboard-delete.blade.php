@extends('layouts.app')

@section('title', 'Удаление объявления')
@section('content')
    <h1>Подтвердите удаление объявления</h1>
    <form action="{{ route('billboard.destroy', $billboard) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Удалить</button>
    </form>
@endsection