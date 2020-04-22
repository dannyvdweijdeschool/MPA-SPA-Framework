@extends('layouts.basic-layout')

@section('content')

<div class="container">
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
</div>

@endsection