@extends('layouts.base')
@section('contenu')
    <p>spot liste</p>
    <a href='{{ URL::route('region.index') }}'>France</a>
    <h1>
      <a href='{{ URL::route('departement.index', ['region' => $region]) }}'>
        {{ $region->name}}
      </a>
    </h1>
    <h1>
      <a href='{{ URL::route('ville.index', ['region' => $region, 'departement' => $departement]) }}'>
        {{ $departement->name}}
      </a>
    </h1>
    <h1>{{ $ville->name}}</h1>
    <h2>
        Nombre de Spots : {{ count($spots) }}
    </h2>
    <a href='{{ URL::route('spot.create', ['region' => $region,'departement' => $departement, 'ville'=>$ville]) }}'>créer un nouveau spot</a>

    @forelse ($spots as $spot)
        <div class="row">
            <div class="row_col">

                <h4>Nom du site : {{ $spot->name }}</h4>
                <p>Nombre de voies : {{ $spot->nombre_voies }}</h5>
                <p>Nombre de degaines : {{ $spot->nombre_degaines }}</p>
                <p>Exposition soleil : {{ $spot->expo_soleil }}</p>
                <p>Temps d'approche : {{ $spot->temps_approche }} m.</p>
                <p>Type de roche : {{ $spot->type_roche }}</p>
                <p>Altitude : {{ $spot->altitude }} m.</p>
                <p>Longueur de corde : {{ $spot->longueur_corde }} m.</p>
                <p>Nombre de secteur : {{ $spot->nombre_secteur }}</p>
                <p>Nombre de voies niveau 4 : {{ $spot->voies_4 }}</p>
                <p>Nombre de voies niveau 5 : {{ $spot->voies_5 }}</p>
                <p>Nombre de voies niveau 6 : {{ $spot->voies_6 }}</p>
                <p>Nombre de voies niveau 7 : {{ $spot->voies_7 }}</p>
                <p>Nombre de voies niveau 8 : {{ $spot->voies_8 }}</p>



            </div>
            <div class="row_col">
                <p>
                    <a href='{{URL::route('spot.edit', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville, 'spot'=>$spot->id])}}'>modifier</a>
                    <a href='{{URL::route('voie.index', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville, 'spot'=>$spot->id])}}'>Voies</a>
                </p>
            </div>
            <div class="row_col">
                <form action="{{route('spot.destroy', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville, 'spot'=>$spot->id])}}" method="GET">
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    @empty
        <p>Aucun spot</p>
    @endforelse
@endsection
