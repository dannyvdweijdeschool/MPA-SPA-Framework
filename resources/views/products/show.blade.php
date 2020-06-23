@extends('layouts.basic-layout')

@section('content')

<div class="container">
    <form action="/add-to-cart/{{$product[0]->id}}" method="POST">
        @csrf
        <div class="contentContainer">
            <h1>{{$product[0]->product_name}}</h1>
            <p>{{$product[0]->product_color}}</p>
            <p>{{$product[0]->product_materials}}</p>
            <p>&#x20ac;{{$product[0]->product_price}}-,</p>
            <a class="btn btn-primary" href="/categories/{{$product[0]->category_id}}/products">Ga terug</a>
            <input name="amount" type="number" value="1">
            <button type="submit" class="btn btn-secondary">In Winkelwagen</button>
        </div>
    </form>
</div>

@endsection