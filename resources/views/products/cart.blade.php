@extends('layouts.basic-layout')

@section('content')

<div class="container">
    <div class="contentContainer">
        <h1>Winkelwagen</h1>
        @if(count($products) > 0)
            <div id="cartContainer">
            @foreach($products as $product)
                <div class="cartContainerRow">
                    <h3>{{$product["item"]["product_name"]}}</h3>
                    <p>Aantal stuks: {{$product["qty"]}}</p>
                    <p>prijs: &#8364;{{$product["price"]}},-</p>
                </div>
            @endforeach
            <div id="cartTotalContainer">
                <h2>Betaling</h2>
                <p>Totaal aantal producten: {{Session::get("cart")->totalQty}}</p>
                <p>Totaal prijs: &#8364;{{Session::get("cart")->totalPrice}},-</p>
            </div>
            </div>
        @else
            <p>Er zijn geen producten gevonden.</p>
        @endif
    </div>
</div>

@endsection