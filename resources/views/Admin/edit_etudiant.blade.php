@extends('layout.app')
@section('content')
<div>
    <header>
        <h2>
            Modefier le profil de l'etudiant <u>{{$etudiant -> nom}}</u>
        </h2>
    </header>

    <form action="/admin/update_etudiant/{{$etudiant -> id}}" class="form_create" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <!-- information de contact -->
        <div class="flex column info">
          <div class="header">
            <h1>information de contact</h1>
          </div>
        <div class="mb-6">
          <div>
            <label for="email"
                >Email</label
            >
            <input
                type="email"
                name="email"
                value="{{$etudiant -> email}}"
            />
            @error('email')
              <p class="error">
                {{$message}}
              </p>
            @enderror
          </div>
        </div>

        <div class="mb-6">
          <div >
            <label for="nom"
                >Nom</label
            >
            <input
                type="text"
                name="nom"
                value="{{$etudiant -> nom}}"
            />
            @error('nom')
              <p class="error">
                {{$message}}
              </p>
            @enderror
          </div>
        </div>

        <div class="mb-6">
          <div >
            <label for="prenom"
                >prenom</label
            >
            <input
                type="text"
                name="prenom"
                value="{{$etudiant -> prenom}}"
            />
            @error('prenom')
              <p class="error">
                {{$message}}
              </p>
            @enderror
          </div>
        </div>

        <div class="mb-6">
          <div >
            <label for="adresse"
                >Addresse</label
            >
            <input
                type="text"
                name="adresse"
                value="{{$etudiant -> adresse}}"
            />
            @error('adresse')
              <p class="error">
                {{$message}}
              </p>
            @enderror
          </div>
        </div>

        <div class="mb-6">
          <div >
            <label for="tel"
                >telephonne</label
            >
            <input
                type="text"
                name="tel"
                value="{{$etudiant -> tel}}"
                disabled
            />
            @error('tel')
              <p class="error">
                le Numero de telephonne devrait contient 8 chiffres
              </p>
            @enderror
          </div>
          </div>

          <div class="mb-6">
            <div >
              <label for="cin"
                  >CIN</label
              >
              <input
                  type="text"
                  name="cin"
                  value="{{$etudiant -> cin}}"
              />
              @error('cin')
                <p class="error">
                  le CIN devrait contient 8 chiffres
                </p>
              @enderror
            </div>
          </div>

          <div class="mb-6">
            <div >
              <label for="logo"
                  >logo</label
              >
              <input
                  type="file"
                  name="logo"
                  value="{{asset('images/etudiant.jpg')}}"
              />
              @error('logo')
                <p class="error">
                  {{$message}}
                </p>
              @enderror
            </div>
          </div>
      </div>
      <!-- fin information de contact -->
          <div class="mb-6">
            <button
                type="submit"
            >
                modefier
            </button>
        </div>
    </form>
</div>
@endsection
