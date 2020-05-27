@extends('layouts.basic-layout')

@section('content')

<div class="container">
    <div class="contentContainer">
        <form action="/checkout" method="POST">
            @csrf
            <h1>Betalling</h1>
            <div class="formInputContainer">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required value="@if(Auth::check()){{Auth::user()->name}}@endif">
            </div>
            <div class="formInputContainer">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]{2,}" required value="@if(Auth::check()){{Auth::user()->email}}@endif">
            </div>
            <div class="formInputContainer">
                <label for="country">Land:</label>
                <input type="text" id="country" name="country" required>
            </div>
            <div class="formInputContainer">
                <label for="name">Straat:</label>
                <input type="text" id="street" name="street" required>
            </div>
            <div class="formInputContainer">
                <label for="postalCode">Post Code:</label>
                <input type="text" id="postalCode" name="postalCode" size="6" required>
            </div>
            <button class="btn btn-primary buttonMarginTop" type="submit">Afronding</button>
        </form>
    </div>
</div>

@endsection