@extends('layouts.base')
@section('contenu')


    <a href='{{ URL::route('home') }}'>Home</a>
    <h1>Mon Profil</h1>

    <p>Nom : {{ Auth::user()->name }}</p>
    <p>Login : {{ Auth::user()->email }}</p>
    <p>Role : {{ Auth::user()->role }}</p>

@endsection