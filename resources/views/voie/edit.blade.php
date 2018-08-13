@extends('layouts.base')
@section('contenu')

    <a href='{{ URL::route('home') }}'>Home</a>

    <p>voie edit</p>

    <form action="{{route('voie.update', ['region'=>$region->id,'departement'=>$departement->id,'ville'=>$ville->id, 'spot'=>$spot->id, 'voie'=>$voie->id])}}" method="post">
        @csrf

        <input type="texte" name="name" placeholder="nom de la voie" value="{{ $voie->name }}">
        <input type="texte" name="slug" placeholder="slug" value="{{ $voie->slug }}">
        <input type="texte" name="quotation_voies" placeholder="quotation de la voies" value="{{ $voie->quotation_voies }}">
        <input type="texte" name="descriptif" placeholder="descriptif" value="{{ $voie->descriptif }}">
        <input type="texte" name="longueur_corde_conseillees" placeholder="longueur de corde conseillees" value="{{ $voie->longueur_corde_conseillees }}">
        <input type="texte" name="nbre_degaines_conseillees" placeholder="nombre de degaines conseillees" value="{{ $voie->nbre_degaines_conseillees }}">
        <input type="texte" name="quotation_plaisir" placeholder="quotation plaisir" value="{{ $voie->quotation_plaisir }}">

        <input type="submit" value="enregistrer">
    </form>
@endsection
