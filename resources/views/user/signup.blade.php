@extends('layouts.basic-layout')

@section('content')

<div class="container">
    <div class="contentContainer">
        <div class="signupContainer">
            <h1>Maakt een account!</h1>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <form action="/user/signup" method="POST">
                @csrf
                <div class="formInputContainer">
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="formInputContainer">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="formInputContainer">
                    <label for="password">Wachtwoord:</label>
                    <input type="password" id="password" name="password">
                </div>
                <button class="btn btn-primary buttonMarginTop" type="submit">Account aan maken!</button>
            </form>
        </div>
    </div>
</div>

@endsection