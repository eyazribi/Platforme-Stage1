@extends('layout.app')
@section('content')
@include('partials._search')<p></p>
<div >
  <div class="config" style="width: 200px">
    Societe:
    <ul>
      <a href="/company"><li>liste des etudiants</li></a>
      <a href="/company/liste_offre"><li>liste des offres</li></a>
    </ul>
  </div>
  <p></p>
  <div style="margin-bottom:20px">
    <table border="1px" width="900px">
      <tr>
        <td>nom de l'offre</td>
        <td>payant</td>
        <td>Competence</td>
        <td>?</td>
      </tr>
      <tr>
      <td>{{$liste[0] -> job_title}}</td>
      @if($liste[0] -> job_paid == 1)
        <td>vrai</td>
      @else
        <td>Faux</td>
      @endif
      <td>
      @foreach(explode(",", $liste[0] -> tags) as $t)
        <li
            class="tags flex"
            style="margin-bottom: 1px"
        >{{$t}}
        </li>
      @endforeach
    </td>
    <td>
      Modefier | supprimer | afficher
    </td>
  </tr>
    </table>
  </div>
</div>
@endsection
