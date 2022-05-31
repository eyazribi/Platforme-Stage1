@extends('layout.app')
@section('content')
<form action="/company/update_offre/{{$liste[0] -> offre_stages_id}}" class="form_create" method="post" style="width: 100%">
    @csrf
    @method('put')
        <div class="container">

                            <div class="row justify-content-start" style="padding-top:10px;">
        <h1>Add an intership offre</h1>


                        </div>
                        <div class="row justify-content-start" style="padding-top:10px;">

                        <div class="col" style="padding-top:10px;">
        <label for="title">Title </label>



                        </div>
                        <div class="col" style="padding-top:10px;">
        <label>Payment </label>
                        </div>
                        </div>
                        <div class="row justify-content-start" style="padding-top:10px;">

                        <div class="col" style="padding-top:10px;">
        <input name="job_title" value="{{$liste[0] -> job_title}}" class="form-control"></input>
        @error('job_title')
        {{$message}}
        @enderror

                        </div>
                        <div class="col" style="padding-top:10px;">
                        <select name="job_paid">
                        @error('job_paid')
        {{$message}}
        @enderror
                            <option {{$liste[0] -> job_paid == 1 ? "selected" : ""}} value="1">OUI</option>
                            <option {{$liste[0] -> job_paid == 0 ? "selected" : ""}} value="0">Non</option>
                        </select>
                        </div>
                        </div>
                        <div class="row justify-content-start" style="padding-top:10px;">

                        <div class="col" style="padding-top:10px;">
        <label>Competence(seprated by ",")</label>



                        </div>
                        <div class="col" style="padding-top:10px;">
        <label>Description</label>



                        </div>
                        <div class="row justify-content-start" style="padding-top:10px;">

                        <div class="col" style="padding-top:10px;">
        <input name="tags"
          value="{{$liste[0] -> tags}}"
        class="form-control"></input>
        @error('tags')
        {{$message}}
        @enderror

                        </div>
                        <div class="col" style="padding-top:10px;">
        <textarea name="description">
          {{$liste[0] -> description}}
        </textarea>
        @error('description')
        {{$message}}
        @enderror
                        </div>
                        </div>
                        <div class="row" style="padding-top:10px;">
                          @foreach($liste as $stg)
                            <p>le nombre d'etudiant pour le {{$stg -> nom_stage}}</p>
                            <input type="number" value="{{$stg -> nb}}" name="stage<?php echo $stg->id?>" min="0" required>
                          @endforeach
                        </div>
                        <div class="row justify-content-start" style="padding-top:10px;">

                        <div class="row justify-content-end" style="padding-top:10px;">
                        <button class="btn btn-primary"  type="submit">update Offre</button>


                        </div>


        </div>



            </div>







</form>
@endsection
