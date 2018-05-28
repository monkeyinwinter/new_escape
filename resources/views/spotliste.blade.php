@extends('layouts.base')
@section('contenu')

    <p>spot liste</p>

    @forelse ($spots as $spot)
        <h2>
            {{ $spot->name }}
        </h2>
    @empty
        <p>Aucun spot</p>
    @endforelse

    <a href='{{ URL ::route('spot_create') }}'>créer un nouveau spot</a>

@endsection
