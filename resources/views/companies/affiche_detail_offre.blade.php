@extends('layout.app')
@section('content')
<a href="/company/liste_offre" class="back"><i class="fa-solid fa-arrow-left"></i> Back
</a>
  <div>
    <table border="1px" width="900px">
      <tr>
        <td>nom de l'offre</td>
        <td>payant</td>
        <td>Competence</td>
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
  </tr>
    </table>

    <table border="1px" width="900px" style="margin-top: 20px">
      <tr>
        <td>le type de stage</td>
        <td>le nombre des etudiant demandees</td>
      </tr>
      @foreach($liste as $ls)
      <tr>
      <td>{{$ls -> nom_stage}}</td>
      <td>{{$ls -> nb}}</td>
    </tr>
    @endforeach
    </table>

  </div>
@endsection
