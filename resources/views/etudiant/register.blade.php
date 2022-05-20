@extends('layout.app')
@section('content')
<div>
    <header>
        <h2>
            Register
        </h2>
        <p class="mb-4">creer un nouveau compte</p>
    </header>

    <form action="/store" class="form_create" method="post">
        @csrf
        <div class="mb-6">
            <label for="nom">
                Nom
            </label>
                <input type="text"
                name="nom"
                value="{{old('nom')}}"
            />
            @error('nom')
              <p class="error">
                {{$message}}
              </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="prenom">
                prenom
            </label>
                <input type="text"
                name="prenom"
                value="{{old('prenom')}}"
            />
            @error('prenom')
              <p class="error">
                {{$message}}
              </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email"
                >Email</label
            >
            <input
                type="email"
                name="email"
                value="{{old('email')}}"
            />
            @error('email')
              <p class="error">
                {{$message}}
              </p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="cin"
            >
                CIN
            </label>
            <input
                type="text"
                name="cin"
                value="{{old('cin')}}"
            />
            @error('cin')
              <p class="error">
                {{$message}}
              </p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="tel"
            >
                Num Tel
            </label>
            <input
                type="text"
                name="tel"
                value="{{old('tel')}}"
            />
            @error('tel')
              <p class="error">
                {{$message}}
              </p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="classe"
            >
                classe
            </label>
            <select name="niveauxes_id">
              @foreach($classe as $cls)
              <option value="{{$cls['id']}}">{{$cls['nom_niveau']}}</option>
              @endforeach
            </select>
            @error('niveauxes_id')
              <p class="error">
                {{$message}}
              </p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password"
            >
                Password
            </label>
            <input
                type="password"
                name="password"
                value="{{old('password')}}"
            />
            @error('password')
              <p class="error">
                {{$message}}
              </p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password2"
            >
                Confirm Password
            </label>
            <input
                type="password"
                name="password_confirmation"
                value="{{old('password_confirmation')}}"
            />
            @error('password_confirmation')
              <p class="error">
                {{$message}}
              </p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                type="submit"
            >
                Sign Up
            </button>
        </div>

        <div class="mb-6">
            <p>
                Already have an account?
                <a href="/login" style="background-color: rgb(239, 59, 45); padding: 20px; color: white; border-radius: 10px"
                    >Login</a
                >
            </p>
        </div>
    </form>
</div>
@endsection
