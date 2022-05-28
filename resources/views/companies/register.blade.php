@extends('layout.app')
@section('content')
<div>
    <header>
        <h2>
            Register
        </h2>
        <p class="mb-4">creer un nouveau compte</p>
    </header>

    <form action="/company/store_company" class="form_create" method="post">
        @csrf
        <div class="mb-6">
            <label for="nom">
                Nom de societe
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
            <label for="email">
                Email
            </label>
                <input type="text"
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
            <label for="lien"
                >site</label
            >
            <input
                type="text"
                name="lien"
                value="{{old('lien')}}"
            />
            @error('lien')
              <p class="error">
                {{$message}}
              </p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="adresse"
            >
                address
            </label>
            <input
                type="text"
                name="adresse"
                value="{{old('adresse')}}"
            />
            @error('adresse')
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
                le numero de telephonne doit contenir 8 chiffres
              </p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="founded"
            >
                date de creation
            </label>
            <input
                type="date"
                name="founded"
                value="{{old('founded')}}"
            />
            @error('founded')
              <p class="error">
                {{$message}}
              </p>
            @enderror
        </div>

        <div class="mb-6">

            <label
                for="company_size"
            >
                le nombre d'employee
            </label>
            <input
                type="number"
                name="company_size"
                value="{{old('company_size')}}"
            />
            @error('company_size')
              <p class="error">
                {{$message}}
              </p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="description"
            >
                description
            </label>
            <textarea name="description">
              {{old('description')}}
            </textarea>
            @error('description')
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
                <a href="/company/login_company" style="background-color: rgb(239, 59, 45); padding: 20px; color: white; border-radius: 10px"
                    >Login</a
                >
            </p>
        </div>
    </form>
</div>
@endsection
