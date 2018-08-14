@extends('layouts.base')
@section('contenu')

    <a href='{{ URL::route('home') }}'>Home</a>

    <p>departement liste</p>
    <a href='{{ URL::route('region.index') }}'>France</a>
    <h1>{{ $region->name}}</h1>
    <h2>
        Nombre de Departements : {{ count($departements) }}
    </h2>
    @can('update', $departements)
        <a href='{{ URL::route('departement.create', ['region' => $region]) }}'>créer un nouveau departement</a>
    @endcan
    @forelse ($departements as $departement)

        <a href='{{URL::route('ville.index', ['region' => $region, 'departement'=>$departement->id])}}'>
            <table class="hover">
                <tr>
                    <td>
                        <h4>{{ $departement->name }}</h4>
                    </td>
                    <td>
                        <a href='{{URL::route('ville.index', ['region' => $region, 'departement'=>$departement->id])}}'>
                            <h4>{{ $departement->departement_number }}</h4>
                        </a>
                    </td>

                    @can('update', $departement)
                        <td class="modif">
                            <a href='{{URL::route('departement.edit', ['region' => $region, 'departement'=>$departement->id])}}'>
                                <p>modifier</p>
                            </a>
                        </td>
                    @endcan
                    @can('delete', $departement)
                        <td class="btn sup">
                            <form action="{{route('departement.destroy', ['region' => $region, 'departement'=>$departement->id])}}" method="GET">
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    @endcan
                </tr>
            </table>
        </a>

    @empty
        <p>Aucun departement</p>
    @endforelse


@endsection
