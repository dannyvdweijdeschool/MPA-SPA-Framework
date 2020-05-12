@extends('layouts.basic-layout')

@section('content')

<div class="container">
    <div class="contentContainer">
        <h1>{{$product[0]->product_name}}</h1>
        <p>{{$product[0]->product_color}}</p>
        <p>{{$product[0]->product_materials}}</p>
        <p>&#x20ac;{{$product[0]->product_price}}-,</p>
        <a class="btn btn-primary" href="/categories/{{$product[0]->category_id}}/products">Ga terug</a>
    <a class="btn btn-secondary" href="/add-to-cart/{{$product[0]->product_id}}">In Winkelwagen</a>
    </div>
</div>

@endsection