@extends('layouts.app')
@section('title', 'Мои объявления')

@section('content')
    <p class="text-end"><a href="{{ route('billboard.create') }}">Добавить объявление</a></p>
    <div class="row p-2">
        @foreach ($billboards as $billboard)
            @include('partials.billboard-edit-card', ['billboard' => $billboard])
        @endforeach
    </div>
@endsection
