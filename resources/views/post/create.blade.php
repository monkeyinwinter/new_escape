@extends('layouts.base')
@section('contenu')
    <p>{{ Auth::user()->name }}</p>
    <p>post create</p>

    <form action="{{route('post.store')}}" method="post">
        @csrf
        <input type="texte" name="title" placeholder="title">
        <input type="texte" name="textPost" placeholder="textPost">
        <input type="submit" value="enregistrer">
    </form>

@endsection