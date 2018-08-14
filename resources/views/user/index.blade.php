@extends('layouts.base')

@section('contenu')


    <a href='{{ URL::route('home') }}'>Home</a>
    <h1>Mon Profil</h1>

    <p>Nom : {{ $user->name }}</p>
    <p>Login : {{ $user->email }}</p>
    <p>Role : {{ $user->role }}</p>

    @include('post.mespostsnew', ['totos' => $user->posts])


@endsection