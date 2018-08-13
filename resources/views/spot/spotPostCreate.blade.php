@extends('layouts.base')
@section('contenu')

    <a href='{{ URL::route('home') }}'>Home</a>

    <p>{{ Auth::user()->name }}</p>

    <p>post spotPostCreate</p>

    <form action="{{route('spot.spotPostStore',[ 'spot'=>$spot->id, 'region'=>$region->id, 'departement'=>$departement->id, 'ville'=>$ville->id])}}" method="post">
        @csrf
        <input type="texte" name="title" placeholder="title">
        <input type="texte" name="textPost" placeholder="textPost">
        <input type="submit" value="enregistrer">
    </form>

@endsection