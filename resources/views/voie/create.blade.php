@extends('layouts.base')
@section('contenu')

    <p>voie create</p>

    <form action="{{ route('voie.store',['region'=>$region->id, 'departement'=>$departement->id, 'ville'=>$ville->id, 'spot'=>$spot->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="nom de la voie">
        <input type="texte" name="slug" placeholder="slug">
        <input type="texte" name="quotation_voies" placeholder="quotation voies">
        <input type="texte" name="descriptif" placeholder="descriptif">
        <input type="texte" name="longueur_corde_conseillees" placeholder="longueur corde conseillees">
        <input type="texte" name="nbre_degaines_conseillees" placeholder="nombre de degaines conseillees">
        <input type="texte" name="quotation_plaisir" placeholder="quotation plaisir">

        <input type="submit" value="enregistrer">

    </form>
@endsection
