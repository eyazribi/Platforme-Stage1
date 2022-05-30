<!DOCTYPE html>
<html lang="en">
    <head>
       <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(253282)</script>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
                  integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <title>stage</title>
    </head>
    <body>
      <?php
      $val = url() -> current();
      $res = explode("/", $val);
      $val2;
      $val1;
      $val3;
      $val4;
      $val5;
      if (in_array("company", $res)) {
        $val1 = "/company/register_company";
        $val2 = "/company/company_login";
        $val3 = "/company";
        $val4 = "/company/modefier_company";
        $val5 = "/company/logout";
      } else {
        $val1 = "/register";
        $val2 = "/login";
        $val3 = "/";
        $val4 = "/modefier";
        $val5 = "/logout";
      }
      ?>
        <nav class="nav">
          <a href=<?php echo $val3?>>
            <img src="{{asset('/images/stages_h.jpg')}}" class="logo">
          </a>
            <ul class="list">
              @if(session() -> has('loginId'))
                <li>
                    <span class="font-bold">welcome {{session('nom')}}</span>
                </li>
                <li>
                    <a href=<?php echo $val4?>
                      ><i class="fa-solid fa-gear"></i>
                        parametre</a
                        >
                </li>
                <li>
                    <form class="inline" method="post" action=<?php echo $val5?> style="margin-left: 10px">
                      @csrf
                      <button type="submit"><i class="fa-solid fa-door-closed"></i>logout</button>
                    </form>
                </li>
                @else
                  <li>
                      <a href=<?php echo $val1?> class="hover"
                          ><i class="fa-solid fa-user-plus"></i> Register</a
                      >
                  </li>
                  <li>
                      <a href=<?php echo $val2?> class="hover"
                          ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                          Login</a
                      >
                  </li>
                  @endif
            </ul>
        </nav>
        <main>
          @yield('content')
        </main>
        <footer class="footer" >
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
            @if(session() -> has('loginId') && session() -> all()['session_id'] == 1)
              <a href="/company/add-off">Ajouter un offre de stage</a>
            @endif
        </footer>
  </body>
</html>
