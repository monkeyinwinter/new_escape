@extends('layouts.base')
@section('contenu')

    <p>region create</p>

    <form action="{{route('region.update', ['region'=>$region->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="region" value="{{ $region->name }}">
        <input type="texte" name="slug" placeholder="slug" value="{{ $region->slug }}">
        <input type="submit" value="enregistrer">
    </form>
@endsection
