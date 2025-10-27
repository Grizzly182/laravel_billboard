@extends('layouts.app')

@section('title', $billboard->title)

@section('content')
        <h2>{{ $billboard->title }}</h2>
        <p>{{ $billboard->content }}</p>
        <p>{{ $billboard->price }} руб.</p>
@endsection