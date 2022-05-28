@extends('layout.app')
@section('content')
@include('partials._search')<p></p>
<div class="admin_grid">
  <div class="config">
    Admin:
    <ul>
      <li>liste des etudiants</li>
      <li>liste des socites</li>
    </ul>
  </div>
  <div class="grid"><p></p>
    <h2>liste des etudiants</h2>
    @foreach($etudiant as $etd)
    <div class="flex">
      <img
          src="{{asset('images/etudiant.jpg')}}"/>
      <div>
          <h3>
              <a href="/admin/etudiant_properiete/{{$etd -> id}}">{{$etd -> nom}}</a>
          </h3>
          @php
            $val;
            foreach($niveaux as $comp) {
              if ($comp['id'] == $etd -> niveauxes_id) {
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
              <i class="fa-solid fa-location-dot"></i>{{$etd -> adresse}}
          </div>
          <div class="flex" style="justify-content: space-between">
            <a href="/admin/edit_etudiant/{{$etd -> id}}" style="cursor:pointer">editer</a>
            <form action="/admin/supprimer/{{$etd -> id}}" method="post">
              @csrf
              @method('delete')
              <input type="submit" value="supprimer">
            </form>
          </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
