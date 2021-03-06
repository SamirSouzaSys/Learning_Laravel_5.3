@extends('site.templates.template1')

@section('content')

    <h1>Home page do site!</h1>
    {{--    {!! $xss !!}--}} {{-- Dessa forma executa o JS --}}
    {{ $xss }}

    {{--@if ($var1 == '123')
        <p>É igual</p>
    @else
        <p>Não é igual</p>
    @endif--}}

    {{--@unless($var1 == '123')
        <p>Usando o unless - é diferente</p>
    @endunless--}}

    @for( $i = 0; $i < 10 ; $i++)
        <p>Valor FOR: {{$i}}</p>
    @endfor

    @foreach ($arrayData as $array)
        <p>Valor ForEach: {{$array}}</p>
    @endforeach

    @forelse ($arrayData as $array)
        <p>Forelse: {{$array}}</p>
    @empty
        <p>Não existe itens para serem impressos</p>
    @endforelse

    {{--@php
    @endphp--}}
    @include('site.includes.sidebar',compact('var1'))

@endsection

@push('scripts')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endpush