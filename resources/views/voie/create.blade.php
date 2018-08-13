@extends('layouts.base')
@section('contenu')

    <p>voie create</p>

    <form action="{{ route('voie.store',['region'=>$region->id, 'departement'=>$departement->id, 'ville'=>$ville->id, 'spot'=>$spot->id])}}" method="post">
        @csrf
        <input type="texte" name="name" placeholder="nom de la voie"><br>
        <input type="texte" name="slug" placeholder="slug"><br>
        <input type="texte" name="quotation_voies" placeholder="quotation voies"><br>
        <input type="texte" name="descriptif" placeholder="descriptif"><br>
        <input type="texte" name="longueur_corde_conseillees" placeholder="longueur corde conseillees"><br>
        <input type="texte" name="nbre_degaines_conseillees" placeholder="nombre de degaines conseillees"><br>
        <input type="texte" name="quotation_plaisir" placeholder="quotation plaisir"><br>

{{--        <tr>
            <td>
                <label name="image" >Selectionner une photo</label>
            </td>
            <td>
                <input type="file" name="image" id="file">
            </td>
        </tr><br>

        <br>--}}
        <input type="submit" value="enregistrer">

    </form>
@endsection
