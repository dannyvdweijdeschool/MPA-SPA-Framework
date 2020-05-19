@extends('layouts.basic-layout')

@section('content')

<div class="container">
    <div class="contentContainer">
        <h1>Winkelwagen</h1>
        @if($cart->items)
            @if(count($cart->items) > 0)
                <form action="/change-cart-items" method="POST">
                    @csrf
                    <div id="cartContainer">
                    @foreach($cart->items as $product)
                        <div class="cartContainerRow">
                            <h3>{{$product["item"]["product_name"]}}</h3>
                            <p>Aantal stuks:</p>
                            <input class="inputAmount" name="amount{{$product["item"]["product_id"]}}" type="number" value="{{$product["qty"]}}">
                            <p>prijs: &#8364;{{$product["price"]}},-</p>
                            <a href="/remove-item/{{$product["item"]["product_id"]}}">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                    @endforeach
                    <button id="cartRefreshButton" type="submit" class="btn btn-primary">Pas de wijzigingen toe!</button>
                    <div id="cartTotalContainer">
                        <h2>Betaling</h2>
                        <p>Totaal aantal producten: {{$cart->totalQty}}</p>
                        <p>Totaal prijs: &#8364;{{$cart->totalPrice}},-</p>
                    </div>
                    </div>
                </form>
            @else
                <p>Er zijn geen producten gevonden.</p>
            @endif
        @else
            <p>Er zijn geen producten gevonden.</p>
        @endif
    </div>
</div>

@endsection