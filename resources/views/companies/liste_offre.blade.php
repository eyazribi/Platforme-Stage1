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
  @if(count($liste) == 0)
    <p>pas d'offre de stage</p>
  @else
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
      <a href="/company/update_detail_offre/{{$liste[0] -> offre_stages_id}}">Modefier</a> | <form action="/company/delte_offre/{{$liste[0] -> offre_stages_id}}">@csrf @method('delete')<input type="submit" value="supprimer"></form> | <a href="/comapny/affiche_detail_offre/{{$liste[0] -> offre_stages_id}}">afficher</a>
    </td>
  </tr>
    </table>
  </div>
  @endif
</div>
@endsection
