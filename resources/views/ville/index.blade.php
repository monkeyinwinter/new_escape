@extends('layouts.base')
@section('contenu')
    <p>ville liste</p>
    <a href='{{ URL::route('region.index') }}'>RETOUR TOUTES LES REGIONS</a>
    <a href='{{ URL::route('departement.index', ['region' => $region, 'departement'=>$departement]) }}'>RETOUR TOUS LES DEPARTEMENTS</a>
    <h1>{{ $region->name}}</h1>
    <h1>{{ $departement->name}}</h1>
    <a href='{{ URL::route('ville.create', ['region' => $region,'departement' => $departement]) }}'>créer une nouvelle ville</a>

    @forelse ($villes as $ville)
        <div class="row">
            <div class="row_col">
                <h4>
                    {{ $ville->name }}
                </h4>
            </div>
            <div class="row_col">
                <p>
                    <a href='{{URL::route('ville.edit', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville->id])}}'>modifier</a>
                </p>
            </div>
            <div class="row_col">
                <form action="{{route('ville.destroy', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville->id])}}" method="GET">
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    @empty
        <p>Aucun departement</p>
    @endforelse
@endsection