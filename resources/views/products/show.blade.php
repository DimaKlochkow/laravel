@extends('layouts.app')

@section('content')
    <?php dd($product) ?>
    {{--<h2>Продукты</h2><br>--}}
        <strong>{{$product->title}}</strong><br><br>
        <p>Цена:{{$product->price}}</p>
        <p>{{$product->description}}</p>
        <p>{{$product->categories_id->name}}</p>
        {{--<a href="/products/{{$product->alias}}" class="btn btn-info">Детальнее&raquo</a>--}}
@stop