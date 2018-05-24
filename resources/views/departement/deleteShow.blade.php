@extends('layouts.base')
@section('contenu')

    <p>departement delete</p>

    <form action="{{route('departement.destroy', ['departement'=>$departement->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="departement" value="{{ $departement->name }}">
        <input type="texte" name="slug" placeholder="slug" value="{{ $departement->slug }}">
        <input type="texte" name="departement_number" placeholder="departement_number" value="{{ $departement->departement_number }}">

        <input type="submit" value="supprimer">
    </form>
@endsection