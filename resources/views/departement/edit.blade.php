@extends('layouts.base')
@section('contenu')

    <p>departement create</p>

    <form action="{{route('departement.update', ['departement'=>$departement->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="region" value="{{ $departement->name }}">
        <input type="texte" name="slug" placeholder="slug" value="{{ $departement->slug }}">
        <input type="texte" name="departement_number" placeholder="departement_number" value="{{ $departement->departement_number}}">

        <input type="submit" value="enregistrer">
    </form>
@endsection
