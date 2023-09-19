@extends('layouts.main')
@section('title')
@section('content')


    <h1>titulo</h1>

    <img src="/img/banner.jpg" alt="Banner">

    @if ($nome == 'Matheus')
        <p>O nome é {{ $nome }}</p>
    @else
        <p>O nome não é Matheus</p>
    @endif

    @for ($i = 0; $i < count($array); $i++)
        <p>{{ $array[$i] }}</p>
    @endfor

    @php
        $name = 'joao';
        echo $name;
    @endphp

    @foreach ($nomes as $nome)
        <p> {{ $nome }}</p>
    @endforeach


@endsection
