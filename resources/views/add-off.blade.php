@extends('layout.app')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
          <div class="container body-content">
        


<form action="/company/store_off" class="form_create" method="post">
    @csrf
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
        <input name="job_title" class="form-control"></input>
        @error('job_title')
        {{$message}}
        @enderror

                        </div>
                        <div class="col" style="padding-top:10px;">
                        <select name="job_paid">
                        @error('job_paid')
        {{$message}}
        @enderror
                            <option value="1">OUI</option>
                            <option value="0">Non</option>
                        </select>
                        </div>
                        </div>
                        <div class="row justify-content-start" style="padding-top:10px;">

                        <div class="col" style="padding-top:10px;">
        <label>Tags(seprated by ",")</label>



                        </div>
                        <div class="col" style="padding-top:10px;">
        <label>Description</label>



                        </div>
                        </div>
                        <div class="row justify-content-start" style="padding-top:10px;">

                        <div class="col" style="padding-top:10px;">
        <input name="tags" class="form-control"></input>
        @error('tags')
        {{$message}}
        @enderror

                        </div>
                        <div class="col" style="padding-top:10px;">
        <textarea name="description"></textarea>
        @error('description')
        {{$message}}
        @enderror
                        </div>
                        </div>
                        <div class="row justify-content-start" style="padding-top:10px;">

                        <div class="row justify-content-end" style="padding-top:10px;">
                        <button class="btn btn-primary"  type="submit">Add Offre</button>


                        </div>


        </div>



            </div>







</form>
@endsection