<!DOCTYPE html>
<html lang="en">
    <head>
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
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <title>stage</title>
    </head>
    <body>
        <nav class="nav">
          <a href="/">
            <img src="{{asset('/images/stages_h.jpg')}}" class="logo">
          </a>
            <ul class="list">
                <li>
                    <a href="register.html" class="hover"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="" class="hover"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
            </ul>
        </nav>
        <main>
          @yield('content')
        </main>
        <footer >
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
        </footer>
  </body>
</html>
