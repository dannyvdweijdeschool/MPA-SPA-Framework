@extends('layouts.basic-layout')

@section('content')

<div class="container">
    <div class="contentContainer">
        <h1 id="categoriesTitle">Categories</h1>
        @if(count($categories) > 0)
            @foreach($categories as $category)
                <div class="categoryContainer">
                    <h3><a href="#">{{$category->category_name}}</a></h3>
                </div>
            @endforeach
        @else
            <p>Er zijn geen categorieën gevonden.</p>
        @endif
    </div>
</div>

@endsection