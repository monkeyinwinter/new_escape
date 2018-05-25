@extends('layouts.base')
@section('contenu')

    <p>ville create</p>

    <form action="{{ route('ville.store',['region'=>$region->id, 'departement'=>$departement->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="ville">
        <input type="texte" name="slug" placeholder="slug">

        <input type="submit" value="enregistrer">

    </form>
@endsection