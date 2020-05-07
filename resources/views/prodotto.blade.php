@extends('layouts.layout')
@php
    $cards = config('products');
    $carta = $cards[$id];
    // dd($id);
@endphp

@section('titolo')
    {{$carta['titolo']}}
@endsection

@section('css')
    <script src="https://kit.fontawesome.com/6619c90159.js" crossorigin="anonymous"></script>
@endsection

@section('mainContent')

    <div class="container-full">
        <div class="arrow {{($id == 0) ? "disappear" : ''}}">
            <a href="{{route('prodotti.show' , $id - 1)}}"> <i class="fas fa-chevron-left"></i></a>
        </div>
        <div class="contenuto">
            <h1>{{$carta['titolo']}}</h1>
            <div class="container-stretch">
                <img src="{{$carta['src-h']}}" alt="confezione aperta">
                <img src="{{$carta['src-p']}}" alt="confezione aperta">
            </div>
            <div class="descrizione-prodotto">
                <p>{!!$carta['descrizione']!!}</p>
            </div>
        </div>

        <div class="arrow right{{($id == count($cards) - 1) ? "disappear" : ''}}">
            <a href="{{route('prodotti.show' , $id + 1)}}"> <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>

@endsection
