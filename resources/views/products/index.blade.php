@extends('layouts.basic-layout')

@section('content')

<div class="container">
    <div class="contentContainer">
        <h1>products</h1>
        @if(count($products) > 0)
            @foreach($products as $product)
                <div class="categoryContainer">
                    <h3><a href="/categories/{{$product->category_id}}/products/{{$product->product_id}}"">{{$product->product_name}}</a></h3>
                </div>
            @endforeach
        @else
            <p>Er zijn geen producten gevonden.</p>
        @endif
        <a class="btn btn-primary" href="/categories">Ga terug</a>
    </div>
</div>

@endsection