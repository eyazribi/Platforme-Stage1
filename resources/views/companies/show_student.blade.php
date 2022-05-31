@extends('layout.app')
@section('content')
<a href="javascript:history.go(-1)" class="back"><i class="fa-solid fa-arrow-left"></i> Back
</a>
            <div class="mx-4">
                <div class="content">
                    <div
                        class="flex all_content"
                    >
                        <img
                            src="{{$etudiant -> logo ? asset('images/'.$etudiant -> logo) : asset('images/etudiant.jpg')}}"
                            alt=""
                        />

                        <h3 class="">{{$etudiant -> nom}} {{$etudiant -> prenom}}</h3>
                          <ul class="flex">
                              <li
                                  class="tags flex"
                              >
                              {{$etudiant -> nom_niveau}}
                              </li>
                          </ul>
                        <div class="location">
                            <i class="fa-solid fa-location-dot"></i> {{$etudiant -> adresse}}
                        </div>
                        <div>
                            <div class="description">
                                <p style="font-weight: bold">
                                  Le numero de l'etudiant: {{$etudiant -> tel}}
                                </p>
                                <a
                                    href="mailto:{{$etudiant -> email}}"
                                    target="_blank"
                                    class="visiter link"
                                    ><i class="fa-solid fa-globe"></i> contact etudiant</a>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        @endsection
