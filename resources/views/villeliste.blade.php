@extends('layouts.base')
@section('contenu')

    <p>ville liste</p>

    @forelse ($villes as $ville)
        <h2>
            {{ $ville->name }}
        </h2>
    @empty
        <p>Aucune ville</p>
    @endforelse

    <a href='{{ URL ::route('ville_create') }}'>créer une nouvelle ville</a>

@endsection