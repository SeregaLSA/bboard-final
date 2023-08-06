
@extends('layouts.app')

@section('title', $bb->title)
@section('content')

    <h2>{{ $bb->title}}</h2>
    <hr>
    <p>{{ $bb->content }}</p>
    <p>{{ $bb->price }}</p>
    <p>Автор: {{ $bb->user->name }}</p>
    <p><a href="{{ route('index') }}">Назад</a></p>

@endsection('content')

