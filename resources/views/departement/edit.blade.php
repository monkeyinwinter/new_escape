@extends('layouts.base')
@section('contenu')

    <p>departement edit</p>

    <form action="{{route('departement.update', ['departement'=>$departement->id],['region'=>$region->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="region" value="{{ $departement->name }}">
        <input type="texte" name="slug" placeholder="slug" value="{{ $departement->slug }}">
        <input type="texte" name="departement_number" placeholder="departement_number" value="{{ $departement->departement_number}}">

        <input type="submit" value="enregistrer">
    </form>
@endsection
