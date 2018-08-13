@extends('layouts.base')
@section('contenu')

    <p>region create</p>

    <form action="{{route('region.store')}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="region">
        <input type="texte" name="slug" placeholder="slug">
        <input type="submit" value="enregistrer">

    </form>
@endsection
