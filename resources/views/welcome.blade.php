<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>
</head>

<body>
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

    {{-- comentário do blade --}}

</body>

</html>
