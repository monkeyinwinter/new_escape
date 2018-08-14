@extends('layouts.base')
@section('contenu')

    <a href='{{ URL::route('home') }}'>Home</a>

    <p>ville liste</p>
    <a href='{{ URL::route('region.index') }}'>France</a>
    <h1>
      <a href='{{ URL::route('departement.index', ['region' => $region]) }}'>
        {{ $region->name}}
          {{ $user->id}}
      </a>
    </h1>
    <h1>{{ $departement->name}}</h1>
    <h2>
        Nombre de Villes : {{ count($villes) }}
    </h2>
    <a href='{{ URL::route('ville.create', ['region' => $region,'departement' => $departement, 'user' => $user]) }}'>créer une nouvelle ville</a>

    @forelse ($villes as $ville)

        <a href='{{URL::route('spot.index', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville->id])}}' class="table">
            <div class="hover">
                <table class="hover">
                    <td>
                        <h4>Nom de la ville : {{ $ville->name }}</h4>
                        <p>Slug : {{ $ville->slug }}</p>
                        <p>Region departementale : {{ $ville->region_departementale }}</p>
                        <p>Numéro du département : {{ $ville->departement_number }}</p>
                    </td>

                    <tr>
                        <td>

                        </td>
                        @can('update', $ville)
                            <td class="modif">
                                <p>
                                    <a href='{{URL::route('ville.edit', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville->id])}}'>modifier</a>
                                </p>
                            </td>
                        @endcan
                        @can('delete', $ville)
                            <td class="btn sup">
                                <form action="{{route('ville.destroy', ['region' => $region, 'departement'=>$departement, 'ville'=>$ville->id])}}" method="GET">
                                    <button type="submit" >Supprimer</button>
                                </form>
                            </td>
                        @endcan
                    </tr>
                </table>
            </div>
        </a>

    @empty
        <p>Aucune ville</p>
    @endforelse
@endsection
