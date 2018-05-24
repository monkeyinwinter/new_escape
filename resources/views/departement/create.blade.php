@extends('layouts.base')
@section('contenu')

    <p>departement create</p>

    <form action="{{route('departement.store')}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="departement">
        <input type="texte" name="slug" placeholder="slug">
        <input type="texte" name="departement_number" placeholder="numero departement">

        <input type="submit" value="enregistrer">

    </form>
@endsection
