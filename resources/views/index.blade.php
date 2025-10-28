@extends('layouts.app')

@section('title', 'Объявления')

@section('content')
    <div class="row">
        @foreach ($billboards as $billboard)
            @include('partials.billboard-card', ['billboard' => $billboard])
        @endforeach
    </div>
@endsection
