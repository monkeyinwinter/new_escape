@extends('layouts.base')
@section('contenu')

    <p>ville edit</p>

    <form action="{{route('ville.update', ['ville'=>$ville->id,'region'=>$region->id,'departement'=>$departement->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="ville" value="{{ $ville->name }}">
        <input type="texte" name="slug" placeholder="slug" value="{{ $ville->slug }}">
        <input type="submit" value="enregistrer">
    </form>
@endsection