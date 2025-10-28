@extends('layouts.app')

@section('title', 'Объявления')

@section('content')
        @if (count($billboards) > 0)
                @foreach($billboards as $billboard)
                @include('billboard-card', ['billboard' => $billboard])
                @endforeach
        @endif
@endsection