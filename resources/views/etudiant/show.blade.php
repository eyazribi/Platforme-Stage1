@extends('layout.app')
@section('content')
<a href="/" class="back"><i class="fa-solid fa-arrow-left"></i> Back
</a>
            <div class="mx-4">
                <div class="content">
                    <div
                        class="flex all_content"
                    >
                        <img
                            src="{{asset('images/ALERTE-STAGE.jpg')}}"
                            alt=""
                        />

                        <h3 class="">{{$stage -> job_title}}</h3>
                        <?php
                          $val;
                          $val1;
                          $val2;
                          $val3;
                          $id;
                          foreach ($company as $key) {
                            // code...
                            if ($key['id'] == $stage -> id) {
                              $id = $key['id'];
                              $val = $key['nom'];
                              $val1 = $key['adresse'];
                              $val2 = $key['email'];
                              $val3 = $key['lien'];
                            }
                          }
                        ?>
                        <a href="/company_propriete/<?php echo $id?>">
                        <div class="company">
                          <?php
                            echo $val;
                          ?>
                        </div>
                      </a>
                        <ul class="flex">
                          @foreach(explode(",", $stage -> tags) as $t)
                            <li
                                class="tags flex"
                            >
                                <a href="?tags={{$t}}">{{$t}}</a>
                            </li>
                          @endforeach
                        </ul>
                        <div class="location">
                            <i class="fa-solid fa-location-dot"></i> <?php echo $val1;?>
                        </div>
                        <div>
                            <h3>
                                Description de stage
                            </h3>
                            <div class="description">
                                <p>
                                  {{$stage -> description}}
                                </p>
                                <div>
                                  @foreach($stage_type as $a)
                                  {{$a -> nom_stage}}: {{$a -> nb}}
                                  <br>
                                  @endforeach
                                </div>
                                <div class="flex" style="gap:10px; justify-content: center; align-items: center">
                                @if(count($bool) > 0)
                                <a
                                    href=""
                                    class="contact link"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Deposer demande
                                  </a>
                                @else
                                <form method="post" action="/deposer_demande/{{$stage -> id}}">
                                  @csrf
                                <select  name="type_stage">
                                  @foreach($type_stage as $t)
                                  <option value="{{$t -> id}}">{{$t -> nom_stage}}</option>
                                  @endforeach
                                  <input type="submit" value="deposer un demande">
                                </select>
                                  @endif

                                <a
                                    href="<?php echo $val3?>"
                                    target="_blank"
                                    class="visiter link"
                                    ><i class="fa-solid fa-globe"></i> Visit
                                    Website</a
                                >
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        @endsection
