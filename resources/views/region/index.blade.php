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


    <select name='region' class='form-control' onchange="javascript: selectregion(this.value);">
      <option value="0">Choisissez une région</option>
        @foreach ($regions as $region)
                <option value="{{ $region->id }}">
                  {{ $region->name }}
                </option>
        @endforeach
    </select>

    <select id='departements' class='form-control' onchange="javascript: selectdepartement(this.value);">
      <option value="0">departements</option>
    </select>






    @forelse ($regions as $region)
        <div class="row">
          <div class="row_col">



            <h4>{{ $region->name }}</h4>
          </div>
          <div class="row_col">
            <p>
              <a href='{{URL::route('region.edit', ['region'=>$region->id])}}'>modifier</a>
              <a href='{{URL::route('departement.index', ['region'=>$region->id])}}'>Departement</a>
              <a href='{{URL::route('departement.json', ['region'=>$region->id])}}'>Departement JSON</a>
            </p>
          </div>
            <div class="row_col">
                <form action="{{route('region.destroy', ['region'=>$region->id])}}" method="GET">
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    @empty
        <p>Aucune region</p>
    @endforelse


@endsection
