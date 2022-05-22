@extends('layout.app')
@section('content')
<div class="grid">
@include('partials._search')<p></p>
@foreach($etudiant as $stg)
<div class="flex">
  <img
      src="{{asset('images/etudiant.jpg')}}"/>
  <div>
      <h3>
          <a href="/etudiant_properiete/{{$stg -> id}}">{{$stg -> nom}}</a>
      </h3>
      @php
        $val;
        foreach($niveaux as $comp) {
          if ($comp['id'] == $stg -> niveauxes_id) {
            $val = $comp['nom_niveau'];
          }
        }
      @endphp
      <ul class="flex">
          <li
              class="tags flex"
          >
              <a href="?tags=<?php echo $val?>"><?php echo $val?></a>
          </li>
      </ul>
      <div class="location">
          <i class="fa-solid fa-location-dot"></i>{{$stg -> adresse}}
      </div>
  </div>
</div>
@endforeach
</div>
@endsection
