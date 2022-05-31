@extends('layout.app')
@section('content')
<div class="grid">
@include('partials._search')<p></p>
@foreach($company as $stg)
<div class="flex">
  <img
      src="{{asset('images/ALERTE-STAGE.jpg')}}"/>
  <div>
      <h3>
          <a href="/stage/{{$stg -> id}}">{{$stg -> job_title}}</a>
          <a href="/stage/{{$stg -> id}}">{{$stg -> job_paid}}</a>
          <a href="/stage/{{$stg -> id}}">{{$stg -> description}}</a>
          <a href="/stage/{{$stg -> id}}">{{$stg -> tags}}</a>
      </h3>


  </div>
</div>
</div>
@endforeach
</div>
@endsection
