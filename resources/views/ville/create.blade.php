@extends('layouts.base')
@section('contenu')

    <a href='{{ URL::route('home') }}'>Home</a>

    <p>ville create</p>

    <form action="{{ route('ville.store',['region'=>$region->id, 'departement'=>$departement->id, 'user'=>$user->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="ville">
        <input type="texte" name="slug" placeholder="slug">
        <input type="texte" name="region_departementale" placeholder="region departementale">
        <input type="texte" name="departement_number" placeholder="departement number">
        <input type="submit" value="enregistrer">

    </form>
@endsection
