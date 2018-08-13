@extends('layouts.base')
@section('contenu')


    <a href='{{ URL::route('home') }}'>Home</a>
    <h1>Mon Profil</h1>

    <p>{{ Auth::user()->name }}</p>
    <p>{{ Auth::user()->email }}</p>


@endsection