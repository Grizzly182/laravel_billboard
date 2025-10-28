@extends('layouts.app')

@section('title', $billboard->title)

@section('content')
        <h2>{{ $billboard->title }}</h2>
        <p>{{ $billboard->content }}</p>
        <p>{{ $billboard->price }} руб.</p>
        <p><b>Автор:</b> {{ $billboard->user->name }}</p>
        <a href="{{route('index')}}" class="btn btn-primary">Назад</a>
@endsection