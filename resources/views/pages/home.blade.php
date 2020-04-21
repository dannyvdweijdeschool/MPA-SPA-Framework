@extends('layouts.basic-layout')

@section('content')

<div id="homeHeaderContainer">
    <div id="homeHeaderTextContainer">
        <h1>{{config("app.name", "MPA-SPA-Framework")}}</h1>
        <p>Danny van der Weijde 99053034</p>
    </div>
    <img src="<?php echo $homeImage ?>" alt="header image">
</div>
@endsection