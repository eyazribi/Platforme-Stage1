@extends('layout.app')
@section('content')
<div class="grid">
@include('partials._search')<p></p>
@foreach($stages as $stg)
<div class="flex">
  <img
      src="{{asset('images/ALERTE-STAGE.jpg')}}"/>
  <div>
      <h3>
          <a href="/stage/{{$stg -> id}}">{{$stg -> job_title}}</a>
      </h3>
      @php
        $val;
        $val1;
        foreach($company as $comp) {
          if ($comp['id'] == $stg -> companies_id) {
            $val = $comp['nom'];
            $val1 = $comp['adresse'];
          }
        }
      @endphp
      <div class="company"><?php echo $val?></div>
      <ul class="flex">
        @foreach(explode(",", $stg -> tags) as $t)
          <li
              class="tags flex"
          >
              <a href="?tag={{$t}}">{{$t}}</a>
          </li>
        @endforeach
      </ul>
      <div class="location">
          <i class="fa-solid fa-location-dot"></i> <?php echo $val1?>
      </div>
  </div>
</div>
</div>
@endforeach
</div>
@endsection
