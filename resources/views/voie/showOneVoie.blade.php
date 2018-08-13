@extends('layouts.base')
@section('contenu')

    <h4><a href='{{ URL::route('home') }}'>Home</a></h4>

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
    <h1>
        <a href='{{ URL::route('voie.index', ['region' => $region, 'departement' => $departement, 'ville'=>$ville, 'spot'=>$spot]) }}'>
            {{ $spot->name}}
        </a>
    </h1>
    <h1>Détail de la voie</h1>
    <div class="row">
        <div class="row_col">

            <h4>Nom de la voie : {{ $voie->name }}</h4>
            <p>Quotation de la voie : {{ $voie->quotation_voies }}</h5>
            <p>Descriptif : {{ $voie->descriptif }}</p>
            <p>Longueur de corde conseillees : {{ $voie->longueur_corde_conseillees }}  m.</p>
            <p>Nombre de dègaines de conseillèes : {{ $voie->nbre_degaines_conseillees }}</p>
            <p>Quotation plaisir : {{ $voie->quotation_plaisir }}</p>

        </div>

        <br>

        <img src="/images/test_image.jpg" width="564" height="226"/>

        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="/upload" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Product name : </td>
                    <td><input type="text" name="name" /></td>
                </tr>
                <tr>
                    <td>Product photos (can attach more than one):</td>
                    <td><input type="file" name="photos[]" multiple /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Upload" /></td>
                </tr>
            </table>
        </form>

        <br>


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


@endsection
