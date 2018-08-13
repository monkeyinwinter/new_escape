@extends('layouts.base')
@section('contenu')

    <a href='{{ URL::route('home') }}'>Home</a>

    <p>spot create</p>

    <form action="{{ route('spot.store',['region'=>$region->id, 'departement'=>$departement->id, 'ville'=>$ville->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="nom du spot">
        <input type="texte" name="slug" placeholder="slug">
        <input type="texte" name="nombre_voies" placeholder="nombre voies">
        <input type="texte" name="nombre_degaines" placeholder="nombre degaines">
        <input type="texte" name="expo_soleil" placeholder="expo soleil">
        <input type="texte" name="temps_approche" placeholder="temps approche">
        <input type="texte" name="type_roche" placeholder="type roche">
        <input type="texte" name="altitude" placeholder="altitude">
        <input type="texte" name="longueur_corde" placeholder="longueur corde">
        <input type="texte" name="nombre_secteur" placeholder="nombre secteur">
        <input type="texte" name="voies_4" placeholder="nombre voies 4">
        <input type="texte" name="voies_5" placeholder="nombre voies 5">
        <input type="texte" name="voies_6" placeholder="nombre voies 6">
        <input type="texte" name="voies_7" placeholder="nombre voies 7">
        <input type="texte" name="voies_8" placeholder="nombre voies 8">

        <input type="texte" name="exposition_id" placeholder="exposition_id">

        <input type="submit" value="enregistrer">

    </form>
@endsection
