@extends('layouts.base')
@section('contenu')
<a href='{{ URL::route('home') }}'>Home</a>
<p>{{ Auth::user()->name }}</p>
    <p>post index</p>
    <a href='{{ URL::route('post.create') }}'>créer un nouveau post</a>

    @forelse ($posts as $post)

          <h4>{{ $post->title }}</h4>

          <p>{{ $post->textPost }}</p>

          <p>Nom de l'auteur : {{ $post->user->name}}<p>

          <p>
            <a href='{{ URL::route('post.edit', ['post'  => $post->id]) }}'>modifier</a>
          </p>
          </br>
        <form action="{{route('post.destroy', ['post'  => $post])}}" method="get">
            <button type="submit">Supprimer</button>
        </form>
        <br>

    @empty
        <p>Aucun post</p>
    @endforelse

@endsection
