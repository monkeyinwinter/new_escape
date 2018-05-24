@extends('layouts.base')
@section('contenu')

    <p>region liste</p>

    @forelse ($regions as $region)
        <h2>
            {{ $region->name }}
        </h2>
    @empty
        <p>Aucune region</p>
    @endforelse

    <a href='{{ URL ::route('region_create') }}'>créer une nouvelle région</a>

@endsection