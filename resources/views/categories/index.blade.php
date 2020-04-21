@extends('layouts.basic-layout')

@section('content')

<div class="container">
    <h1>Categories</h1>
    @if(count($categories) > 0)
        @foreach($categories as $category)
            <div class="list-group-item">
                <h3>{{$category->category_name}}</h3>
            </div>
        @endforeach
    @else
        <p>Er zijn geen categorieën gevonden.</p>
    @endif
</div>

@endsection