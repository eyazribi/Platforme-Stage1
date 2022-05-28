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
        <!-- information de contact -->
        <div class="flex column info">
          <div class="header">
            <h1>information de contact</h1>
            <button class="edit icon"><i class="fas fa-edit"></i></button>
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
                le Numero de telephonne devrait contient 8 chiffres
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
                  le CIN devrait contient 8 chiffres
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
              <input type="button" value="enregistrer" class="save">
            </div>
          </div>
      </div>
      <!-- fin information de contact -->

      <!-- information prix -->
      <div class="flex column award">
        <div class="header">
          <h1>information de prix</h1>
          <button class="icon add"><i class="fas fa-plus"></i></button>
        </div>
        <div class="hidden">
      <div class="mb-6">
        <p class="hidden">titre : <span></span></p>
        <div class="displayed">
          <label for="titre"
              >titre</label
          >
          <input
              type="text"
              name="titre"
              value=""
          />
          @error('titre')
            <p class="error">
              {{$message}}
            </p>
          @enderror
        </div>
      </div>

      <div class="mb-6">
        <p class="hidden">date d'attribution: <span></span></p>
        <div class="displayed">
          <label for="date"
              >date d'attribution</label
          >
          <input
              type="date"
              name="date"
              value=""
          />
          @error('date')
            <p class="error">
              {{$message}}
            </p>
          @enderror
        </div>
      </div>

      <div class="mb-6">
        <p class="hidden">Description: <span></span></p>
        <div class="displayed">
          <label for="description"
              >description</label
          >
          <textarea name="description"></textarea>
          @error('description')
            <p class="error">
              {{$message}}
            </p>
          @enderror
        </div>
      </div>
    </div>
    </div>
      <!-- fin -->
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
  let count_award = 0;
  let template = document.querySelector('.award .hidden').innerHTML;
  function save_award(e) {
    e.preventDefault();
    let x = e.target.parentNode.children;
    for (i = 0; i < x.length - 1; i++) {
      x[i].children[0].className = 'displayed';
      x[i].children[0].children[0].innerHTML = x[i].children[1].children[1].value;
      x[i].children[1].className = 'hidden';
    }
    x[x.length - 1].className = 'hidden';
  }

  function add_award(e) {
    e.preventDefault();
    let x = 'save_award' + count_award++;
    let div1 = document.createElement('div');
    let div = template + '<button class=' + x + '>enregistrer</button>';
    div1.innerHTML = div;
    document.querySelector(".award").appendChild(div1);
    let save_award_btn = document.querySelector('.' + x);
    save_award_btn.addEventListener('click', save_award);
  }

  function first() {
    let val = document.querySelectorAll(".info .hidden");
    let val1 = document.querySelector(".award .hidden").children;
    for (i = 0; i < val.length - 1; i++) {
      if (val[i].children.length > 2 ) {
        open();
      }
    }
    for (i = 0; i < val1.length; i++) {
      if (val1[i].children[1].children.length > 2) {
        open1();
      }
    }
  }

  function open1() {
    let val = document.querySelector('.award .hidden').children;
    document.querySelector('.award').children[1].className = "award";
    for(i = 0; i < val.length; i++) {
      val[i].children[0].className = 'hidden';
      val[i].children[1].className = 'displayed';
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
  add_btn.addEventListener('click', add_award);
</script>
@endsection
