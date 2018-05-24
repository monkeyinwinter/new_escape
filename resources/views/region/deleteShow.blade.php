@extends('layouts.base')
@section('contenu')

    <p>region delete</p>

    <form action="{{route('region.destroy', ['region'=>$region->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="region" value="{{ $region->name }}">
        <input type="texte" name="slug" placeholder="slug" value="{{ $region->slug }}">
        <input type="submit" value="supprimer">
    </form>
@endsection