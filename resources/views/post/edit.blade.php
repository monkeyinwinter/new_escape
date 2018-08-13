@extends('layouts.base')
@section('contenu')
    <a href='{{ URL::route('home') }}'>Home</a>
    <p>post edit</p>
    <h4>{{ $post->title }}</h4>
    <form action="{{route('post.update', ['post' => $post->id])}}" method="post">

        @csrf
        <input type="texte" name="title" placeholder="title"  value="{{ $post->title }}">
        <input type="texte" name="textPost" placeholder="textPost" value="{{ $post->textPost }}">
        <input type="submit" value="enregistrer">
    </form>

@endsection