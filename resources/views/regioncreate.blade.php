@extends('layouts.base')
@section('contenu')

    <p>region create</p>

    <form action="{{route('')}}" method="post">
        {{ csrf_field() }}

        <input type="texte" name="nom de la region" placeholder="region">
        <input type="texte" name="slug" placeholder="slug">
        <input type="submit" value="enregistrer">

    </form>
@endsection
