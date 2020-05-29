@extends('layouts.basic-layout')

@section('content')

<div class="container">
    <div class="contentContainer">
        <h1>Uw Profiel</h1>
        <hr>
        <h2>Mijn bestellingen</h2>
        @foreach($orders as $order)
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bestellings gegevens</h5>
                        @foreach($order->cart->items as $item)
                            <p class="card-text">
                                {{$item["item"]["product_name"]}}
                                <span>&#8364; {{$item["price"]}},-</span>
                                <span>{{$item["qty"]}}x</span>
                            </p>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Totaal prijs: &#8364; {{$order->cart->totalPrice}},-</small>
                    </div>
                </div>
            </div>
         @endforeach
    </div>
</div>

@endsection