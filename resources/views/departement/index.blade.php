@extends('layouts.base')
@section('contenu')
    <p>departement liste</p>
    <a href='{{ URL::route('region.index') }}'>RETOUR TOUTES LES REGIONS</a>
    <h1>{{ $region->name}}</h1>
    <a href='{{ URL::route('departement.create', ['region' => $region]) }}'>créer un nouveau departement</a>

    @forelse ($departements as $departement)
        <div class="row">
            <div class="row_col">
                <h4>
                    {{ $departement->name }}
                </h4>
            </div>
            <div class="row_col">
                <p>
                    <a href='{{URL::route('departement.edit', ['region' => $region, 'departement'=>$departement->id])}}'>modifier</a>
                </p>
            </div>
            <div class="row_col">
                <form action="{{route('departement.destroy', ['region' => $region, 'departement'=>$departement->id])}}" method="GET">
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    @empty
        <p>Aucun departement</p>
    @endforelse


@endsection
