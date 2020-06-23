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
                        @foreach($order->orderProducts as $orderProduct)
                        <p class="card-text">
                            {{$orderProduct->product->product_name}}
                            <span>&#8364; {{$orderProduct->total_price}},-</span>
                            <span>{{$orderProduct->product_amount}}x</span>
                        </p>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Totaal prijs: &#8364; {{$order->total_price}},-</small>
                    </div>
                </div>
            </div>
         @endforeach
    </div>
</div>

@endsection