@extends('layouts.base')
@section('contenu')



<script>
function selectregion(regID) {
  $('#departements').empty();
  $.get('http://new_escape/region/'+ regID +'/departement/json', function(data) {
      $.each(data, function(i, reg) {
        $('#departements').append('<option value="'+ reg.id +'">'+ reg.name +'</option>');
      });
  });
}

</script>

    <a href='{{ URL::route('home') }}'>Home</a>

    <h2>
        Nombre de Regions : {{ $regions->count() }}
    </h2>

{{--
    <select name='region' class='form-control' onchange="javascript: selectregion(this.value);">
      <option value="0">Choisissez une région</option>
        @foreach ($regions as $region)
                <option value="{{ $region->id }}">
                  {{ $region->name }}
                </option>
        @endforeach
    </select>

    <select name='departement' id='departements' class='form-control' onchange="javascript: selectdepartement(this.value);">
      <option value="0">departements</option>
        @foreach ($departements as $departement)
                <option value="{{ $departement->id }}">
                    {{ $departement->name }}
                </option>
        @endforeach
    </select>
--}}

    @forelse ($regions as $region)
        <a href='{{URL::route('departement.index', ['region'=>$region->id])}}'>
            <table class="hover">
                <tr>
                    <td>
                        <h4>{{ $region->name }}</h4>
                        <ul>
                        @foreach($region->departements as $departement)
                            <li>{{ $departement->name }}</li>
                        @endforeach
                        </ul>
                    </td>
                    @can('update', $region)
                        <td class="modif">
                            <a href='{{URL::route('region.edit', ['region'=>$region->id])}}'>modifier</a>
                        </td>
                    @endcan
                    @can('delete', $region)
                        <td class="btn sup">
                            <form action="{{route('region.destroy', ['region'=>$region->id])}}" method="GET">
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    @endcan
                </tr>
            </table>
        </a>
            <p>
{{--              <a href='{{URL::route('departement.json', ['region'=>$region->id])}}'>Departement JSON</a>--}}
            </p>

    @empty
        <p>Aucune region</p>
    @endforelse


@endsection
