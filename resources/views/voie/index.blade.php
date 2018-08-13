@extends('layouts.base')
@section('contenu')

    <a href='{{ URL::route('home') }}'>Home</a>

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
    <h1>
      <a href='{{ URL::route('spot.index', ['region' => $region, 'departement' => $departement, 'ville'=>$ville]) }}'>
        {{ $ville->name}}
      </a>
    </h1>
    <h2>
        {{ $spot->name}}
    </h2>
    <h2>
        Nombre de voies : {{ count($voies) }}
    </h2>

    <a href='{{ URL::route('voie.create', ['region' => $region,'departement' => $departement, 'ville'=>$ville, 'spot'=>$spot]) }}'>créer une nouvelle voie</a>

{{--
<p>
  <select name="voie" id ="voie" class="form-control">
   @foreach($voies as $voie)
      <option value="{{$voie->id}}">{{$voie->name}}</option>
   @endforeach
  </select>
</p>
--}}


    @forelse ($voies as $voie)
        <div class="row">
            <div class="row_col">

                <h4>Nom de la voie : {{ $voie->name }}</h4>
                <p>Quotation de la voie : {{ $voie->quotation_voies }}</h5>
                <p>Descriptif : {{ $voie->descriptif }}</p>
                <p>Longueur de corde conseillees : {{ $voie->longueur_corde_conseillees }}  m.</p>
                <p>Nombre de dègaines de conseillèes : {{ $voie->nbre_degaines_conseillees }}</p>
                <p>Quotation plaisir : {{ $voie->quotation_plaisir }}</p>

            </div>

            <div class="row_col">
                <p>
                    <a href='{{URL::route('voie.showOneVoie', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville, 'spot'=>$spot, 'voie'=>$voie->id])}}'>Voir la voie</a>
                </p>
            </div>

            <div class="row_col">
                <p>
                    <a href='{{URL::route('voie.edit', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville, 'spot'=>$spot, 'voie'=>$voie->id])}}'>modifier</a>
                </p>
            </div>
            <div class="row_col">
                <form action="{{route('voie.destroy', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville, 'spot'=>$spot->id, 'voie'=>$voie])}}" method="GET">
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    @empty
        <p>Aucun spot</p>
    @endforelse
@endsection
