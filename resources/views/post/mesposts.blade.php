@extends('layouts.base')
@section('contenu')

<a href='{{ URL::route('home') }}'>Home</a>
<p>{{ Auth::user()->name }}</p>
    <p>post mesposts</p>
    <a href='{{ URL::route('post.create') }}'>créer un nouveau post</a>

    @forelse ($posts as $post)

          <h4>{{ $post->title }}</h4>

          <p>{{ $post->textPost }}</p>

          <p>Nom de l'auteur : {{ $users->name}}<p>


    @empty 
        <p>Aucun post</p>
    @endforelse



@endsection
