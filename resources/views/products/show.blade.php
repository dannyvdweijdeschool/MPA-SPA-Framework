@extends('layouts.basic-layout')

@section('content')

<div class="container">
    <h1>{{$product[0]->product_name}}</h1>
    <p>{{$product[0]->product_color}}</p>
    <p>{{$product[0]->product_materials}}</p>
    <p>&#x20ac;{{$product[0]->product_price}}-,</p>
</div>

@endsection