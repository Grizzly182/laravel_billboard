@extends('layouts.app')
@section('title', 'Мои объявления')

@section('content')
<div class="row mb-3">
    <div class="col-2 justify-content-center align-items-center">
        <img src="{{ isset(Auth::user()->avatar) ? asset(env('STORAGE_PATH') . Image::getPath(Auth::user()->avatar)) : asset(env('STORAGE_PATH') . 'images/default-image.jpg') }}" alt="" style="width: 100%; height: auto; object-fit: cover;">
    </div>
    <div class="col-md-8"><h2>{{ Auth::user()->name }}</h2></div>
</div>
    <h1>Мои объявления</h1>
    <p class="text-end"><a href="{{ route('billboard.create') }}">Добавить объявление</a></p>
    <div class="row p-2">
        @foreach ($billboards as $billboard)
            @include('partials.billboard-edit-card', ['billboard' => $billboard])
        @endforeach
    </div>
@endsection
