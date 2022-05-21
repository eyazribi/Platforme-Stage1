@extends('layout.app')
@section('content')
<div class="mx-4">
    <div>
        <header>
            <h2 >
                Log In
            </h2>
            <p >Log in to post gigs</p>
        </header>

        <form class="form_create" action="/enter" method="post">
          @csrf
            <div>
                <label for="email">Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{old('email')}}"
                />
                @error('email')
                  <p class="error">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label
                    for="password"
                >
                    Password
                </label>
                <input
                    type="password"
                    name="password"
                />
                @error('password')
                  <p class="error">
                    {{$message}}
                  </p>
                @enderror
            </div>

            <div>
                <button
                    type="submit"
                    style="margin-top: 20px"
                >
                    Sign In
                </button>
            </div>

            <div>
                <p>
                    Don't have an account?
                    <a style="background-color: rgb(239, 59, 45); padding: 3px; color: white" href="/regsiter">Register</a
                    >
                </p>
            </div>
        </form>
    </div>
</div>
@endsection
