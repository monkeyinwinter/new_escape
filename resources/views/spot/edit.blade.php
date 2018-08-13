@extends('layouts.base')
@section('contenu')

    <a href='{{ URL::route('home') }}'>Home</a>

    <p>spot edit</p>

    <form action="{{route('spot.update', ['region'=>$region->id,'departement'=>$departement->id,'ville'=>$ville->id, 'spot'=>$spot->id])}}" method="post">
        @csrf

        <input type="texte" name="name" placeholder="nom du spot" value="{{ $spot->name }}">
        <input type="texte" name="slug" placeholder="slug" value="{{ $spot->slug }}">
        <input type="texte" name="nombre_voies" placeholder="nombre voies" value="{{ $spot->nombre_voies }}">
        <input type="texte" name="nombre_degaines" placeholder="nombre degaines" value="{{ $spot->nombre_degaines }}">
        <input type="texte" name="expo_soleil" placeholder="expo soleil" value="{{ $spot->expo_soleil }}">
        <input type="texte" name="temps_approche" placeholder="temps approche" value="{{ $spot->temps_approche }}">
        <input type="texte" name="type_roche" placeholder="type roche" value="{{ $spot->type_roche }}">
        <input type="texte" name="altitude" placeholder="altitude" value="{{ $spot->altitude }}">
        <input type="texte" name="longueur_corde" placeholder="longueur corde" value="{{ $spot->longueur_corde }}">
        <input type="texte" name="nombre_secteur" placeholder="nombre secteur" value="{{ $spot->nombre_secteur }}">
        <input type="texte" name="voies_4" placeholder="nombre voies 4" value="{{ $spot->voies_4 }}">
        <input type="texte" name="voies_5" placeholder="nombre voies 5" value="{{ $spot->voies_5 }}">
        <input type="texte" name="voies_6" placeholder="nombre voies 6" value="{{ $spot->voies_6 }}">
        <input type="texte" name="voies_7" placeholder="nombre voies 7" value="{{ $spot->voies_7 }}">
        <input type="texte" name="voies_8" placeholder="nombre voies 8" value="{{ $spot->voies_8 }}">

        <input type="texte" name="exposition_id" placeholder="exposition_id" value="{{ $exposition_id->exposition_id }}">

        <input type="submit" value="enregistrer">
    </form>
@endsection
