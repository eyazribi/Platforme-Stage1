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
                            src="{{$company -> logo ? asset('images/'.$company -> logo) : asset('images/index.png')}}"
                            alt=""
                        />

                        <h3 class="">{{$company -> nom}}</h3>
                        <div class="company">
                        </div>
                        <div class="location">
                            <i class="fa-solid fa-location-dot"></i> {{$company -> adresse}}
                        </div>
                        <div>
                            <h3>
                                Description de societe
                            </h3>
                            <div class="description">
                                <p>
                                  {{$company -> description}}
                                </p>
                                <p style="font-weight: bold">
                                  la societe contient : {{$company -> company_size}} employee
                                </p>
                                <p style="font-weight: bold">
                                  Le numero de telephonne de societe: {{$company -> tel}}
                                </p>
                                <p style="font-weight: bold">
                                  fonde en : {{$company -> founded}}
                                </p>
                                <div class="flex" style="gap:10px; justify-content: center; align-items: center">
                                <a
                                    href="{{$company -> lien}}"
                                    class="contact link"
                                    ><i class="fa-solid fa-envelope"></i>
                                    visiter</a
                                >

                                <a
                                    href="mailto:{{$company -> email}}"
                                    target="_blank"
                                    class="visiter link"
                                    ><i class="fa-solid fa-globe"></i> contact societe</a
                                >
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        @endsection
