@extends('layouts.base')
@section('contenu')

    <p>departement liste</p>

    @forelse ($departements as $departement)
        <h2>
            {{ $departement->name }}
        </h2>
    @empty
        <p>Aucun departement</p>
    @endforelse

    <a href='{{ URL ::route('departement_create') }}'>créer un nouveau departement</a>

@endsection