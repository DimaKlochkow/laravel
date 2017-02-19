@extends('layouts.app')

@section('content')
    <h2>Продукты</h2><br>
        @foreach($products AS $product)
            <div class="col-md-4">
            <strong>{{$product->title}}</strong><br><br>
            <p>Цена:{{$product->price}}</p>
            <p>{{$product->short_description}}</p>
            <a href="/{{$product->alias}}" class="btn btn-info">Детальнее&raquo</a><br><br><br>
            </div>
        @endforeach
@stop