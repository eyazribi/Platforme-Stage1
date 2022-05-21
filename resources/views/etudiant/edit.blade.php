@extends('layout.app')
@section('content')
<div>
    <header>
        <h2>
            Modefier ton profil
        </h2>
    </header>

    <form action="/update/{{$etudiant -> id}}" class="form_create" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="flex column info">
          <div class="header">
            <h1>information de contact</h1>
            <button class="edit"><i class="fas fa-edit"></i></button>
          </div>
        <div class="mb-6">
          <p class="displayed">Email : <span>{{$etudiant -> email}}</span></p>
          <div class="hidden">
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
          <p class="displayed">Le nom: <span>{{$etudiant -> nom}}</span></p>
          <div class="hidden">
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
          <p class="displayed">Le prenom: <span>{{$etudiant -> prenom}}</span></p>
          <div class="hidden">
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
          <p class="displayed">adresse: <span>{{$etudiant -> adresse}}</span></p>
          <div class="hidden">
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
          <p class="displayed">Le tel: <span>{{$etudiant -> tel}}</span></p>
          <div class="hidden">
            <label for="tel"
                >telephonne</label
            >
            <input
                type="text"
                name="tel"
                value="{{$etudiant -> tel}}"
            />
            @error('tel')
              <p class="error">
                {{$message}}
              </p>
            @enderror
          </div>
          </div>

          <div class="mb-6">
            <p class="displayed">Le CIN: <span>{{$etudiant -> cin}}</span></p>
            <div class="hidden">
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
                  {{$message}}
                </p>
              @enderror
            </div>
          </div>

          <div class="mb-6">
            <img src="" class="displayed">
            <div class="hidden">
              <label for="logo"
                  >logo</label
              >
              <input
                  type="file"
                  name="logo"
                  value="{{$etudiant -> logo}}"
              />
              @error('logo')
                <p class="error">
                  {{$message}}
                </p>
              @enderror
              <input type="button" value="save" class="save">
            </div>
          </div>
      </div>
      <div class="mb-6">
        <div>
          <label for="password"
              >password</label
          >
          <input
              type="password"
              name="password"
              value=""
          />
          @error('password')
            <p class="error">
              {{$message}}
            </p>
          @enderror
        </div>

      </div>
          <div class="mb-6">
            <button
                type="submit"
            >
                modefier
            </button>
        </div>
    </form>
</div>
<script>


  function first() {
    let val = document.querySelectorAll(".info .hidden");
    let val1 = document.querySelectorAll(".award_hidden .hidden");
    for (i = 0; i < val.length - 1; i++) {
      if (val[i].children.length > 2 ) {
        open();
      }
    }
    for (i = 0; i < val1.length; i++) {
      if (val1[i].children.length > 2) {
        console.log(val1[i]);
      }
    }
  }

  function open(e = null) {
    let val = document.querySelectorAll(".info .hidden");
    let val1 = document.querySelectorAll(".info .displayed");
    for (i = 0; i < val.length; i++) {
        val[i].className = 'displayed';
        val1[i].className = 'hidden';
    }
    if (e != null) {
      e.preventDefault();
    }
  }

  function save(e) {
    let val = document.querySelectorAll(".info .hidden");
    let val1 = document.querySelectorAll(".info .displayed");
    for (i = 0; i < val.length; i++) {
      if (i == val.length - 1) {
        val[i].src = val1[i].children[1].value;
      } else {
        val[i].children[0].innerHTML = val1[i].children[1].value;
      }
    }
    for (i = 0; i < val.length; i++) {
      val[i].className = 'displayed';
      val1[i].className = 'hidden';
    }
    e.preventDefault();
  }
  first();
  let x = document.querySelector(".edit");
  let x1 = document.querySelector('.save');
  let add_btn = document.querySelector('.add');
  x1.addEventListener('click', save);
  x.addEventListener('click', open);
</script>
@endsection
