@extends('layouts.admin')

@php
    $database = config('products');
@endphp


@section('titolo')
    prodotti
@endsection

@section('main')
    <table>
        <thead>
            <th>Nome Prodotto</th>
            <th>Descrizione</th>
            <th>Tipo</th>
        </thead>
        <tbody>
            @foreach ($database as $product)
                <tr>
                    <td>{{$product['titolo']}}</td>
                    <td>{!!$product['descrizione']!!}</td>
                    <td>{{$product['tipo']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
