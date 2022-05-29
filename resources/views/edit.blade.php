@extends('layout.app')
@section('content')
<div>
    <header>
        <h2>
            Modefier l'offre de stage 
        </h2>
    </header>

    <form action="/update/{{$offre -> id}}" class="form_create" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <!-- information de contact -->
        <div class="flex column info">
          <div class="header">
            <h1>information de contact</h1>
            <button class="edit icon"><i class="fas fa-edit"></i></button>
          </div>
        <div class="mb-6">
          <p class="displayed">job_title : <span>{{$offre -> 'job_title' }}</span></p>
          <div class="hidden">
            <label for="'job_title' "
                >job_title </label
            >
            <input
                type="text"
                name="'job_title' "
                value="{{$offre -> 'job_title' }}"
            />
            @error(''job_title' ')
              <p class="error">
                {{$message}}
              </p>
            @enderror
          </div>
        </div>

        <div class="mb-6">
          <p class="displayed">job_paid: <span>{{$offre -> job_paid}}</span></p>
          <div class="hidden">
            <label for="job_paid"
                >job_paid</label
            >
            <input
                type="text"
                name="job_paid"
                value="{{$offre -> job_paid}}"
            />
            @error('job_paid')
              <p class="error">
                {{$message}}
              </p>
            @enderror
          </div>
        </div>

        <div class="mb-6">
          <p class="displayed">Tags: <span>{{$offre -> tags}}</span></p>
          <div class="hidden">
            <label for="tags"
                >tags</label
            >
            <input
                type="text"
                name="tags"
                value="{{$offre -> tags}}"
            />
            @error('tags')
              <p class="error">
                {{$message}}
              </p>
            @enderror
          </div>
        </div>

        <div class="mb-6">
          <p class="displayed">'description' : <span>{{$offre -> 'description' }}</span></p>
          <div class="hidden">
            <label for="'description' "
                >'description' </label
            >
            <input
                type="text"
                name="'description' "
                value="{{$offre -> 'description' }}"
            />
            @error(''description' ')
              <p class="error">
                {{$message}}
              </p>
            @enderror
          </div>
        </div>

       @endsection
