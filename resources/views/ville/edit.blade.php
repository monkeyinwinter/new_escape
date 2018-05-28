@extends('layouts.base')
@section('contenu')

    <p>ville edit</p>

    <form action="{{route('ville.update', ['region'=>$region->id,'departement'=>$departement->id,'ville'=>$ville->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="ville" value="{{ $ville->name }}">
        <input type="texte" name="slug" placeholder="slug" value="{{ $ville->slug }}">
        <input type="texte" name="region_departementale" placeholder="region departementale" value="{{ $ville->region_departementale }}">
        <input type="texte" name="departement_number" placeholder="departement number" value="{{ $ville->departement_number }}">

        <input type="submit" value="enregistrer">
    </form>
@endsection
