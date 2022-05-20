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
                                <a
                                    href="<?php echo $val2?>"
                                    class="contact link"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact Employer</a
                                >

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
        @endsection
