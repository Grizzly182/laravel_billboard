@extends('layouts.app')

@section('title', 'Объявления')

@section('content')
        @if (count($billboards) > 0)
        <table class="table table-striped table-borderless">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Цена</th>
                </tr>
            </thead>
            <tbody>
                @foreach($billboards as $billboard)
                <tr>
                    <td><h4>{{ $billboard->title }}</h4></td>
                    <td>{{ $billboard->content }}</td>
                    <td>{{ $billboard->price }} руб.</td>
                    <td>
                        <a href="{{route('billboard.detail', $billboard)}}" class="btn btn-primary">Подробнее...</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
@endsection