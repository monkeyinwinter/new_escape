@extends('layouts.base')
@section('contenu')
    <p>ville liste</p>
    <a href='{{ URL::route('region.index') }}'>France</a>
    <h1>
      <a href='{{ URL::route('departement.index', ['region' => $region]) }}'>
        {{ $region->name}}
      </a>
    </h1>
    <h1>{{ $departement->name}}</h1>

    <a href='{{ URL::route('ville.create', ['region' => $region,'departement' => $departement]) }}'>créer une nouvelle ville</a>

    @forelse ($villes as $ville)
        <div class="row">
            <div class="row_col">
                <h4>Nom de la ville : {{ $ville->name }}</h4>
                <p>Slug : {{ $ville->slug }}</p>
                <p>Region departementale : {{ $ville->region_departementale }}</p>
                <p>Numéro du département : {{ $ville->departement_number }}</p>
            </div>
            <div class="row_col">
                <p>
                    <a href='{{URL::route('ville.edit', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville->id])}}'>modifier</a>
                    <a href='{{URL::route('spot.index', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville->id])}}'>Spot</a>
                </p>
            </div>
            <div class="row_col">
                <form action="{{route('ville.destroy', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville->id])}}" method="GET">
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    @empty
        <p>Aucune ville</p>
    @endforelse
@endsection
