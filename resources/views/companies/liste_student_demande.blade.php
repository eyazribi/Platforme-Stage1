@extends('layout.app')
@section('content')
@include('partials._search')<p></p>
@php
  for($i = 0; $i < count($offre); $i++) {
    echo 'le nom de l\'offre: '.$offre[$i] -> job_title.'<br>';
    for($j = 0; $j < count($etudiant); $j++) {
      if ($offre[$i] -> id == $etudiant[$j] -> offre_stages_id) {
        $k = '/company/etudiant_properiete/'.$etudiant[$j] -> etudiants_id;
        $accept = '/company/accept_student/'.$etudiant[$j] -> etudiants_id.'/'.$offre[$i] -> id;
        $refuse = '/company/refuse_student/'.$etudiant[$j] -> etudiants_id.'/'.$offre[$i] -> id;
        echo "l'etudiant <a href=$k>".$etudiant[$j] -> nom."</a> envoyer un demande de faire un stage de ".$etudiant[$j] -> nom_stage." <a href=$accept>Accepter</a> <a href=$refuse>Refuser</a><br>";
      }
    }
  }
@endphp
@endsection
