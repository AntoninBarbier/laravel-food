@extends('layouts.app')

@section('pagespecificstyles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@stop

@section('content')
    <div clas="container home-header">
        <div class="row justify-content-center">
            <div class="header">
                <p class="welcome">Bienvenue sur Larafood !</p>
                <div class="row justify-content-around">
                    <a href="{{ route('register') }}"><button class="auth">S'INSCRIRE</button></a>
                    <a href="{{ route('login') }}"><button class="auth">SE CONNECTER</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagespecificscripts')

@stop
