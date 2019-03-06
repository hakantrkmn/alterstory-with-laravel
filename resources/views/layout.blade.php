  <!DOCTYPE html>
  <html lang="tr">

  <head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Create Alternative Stories">
    <meta name="author" content="Hakan Türkmen">
    <title>AlterStory</title>
    <link rel="shortcut icon" href="css/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/css/mdb.min.css" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/js/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

<script src="{{ url('/js/alter.js') }}"></script>
    </head>

  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container">
        <a class="navbar-brand" href="/1">alterstory</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <?php if (session()->has('user')): ?>
              <li class="nav-item">
              <a class="nav-link" href="{{route('profil',session('user.ad'))}}">{{session('user.ad')}}</a>
              </li>
              <?php endif; ?>
            <li class="nav-item">
              <?php if (session()->has('user') and session('user.ban')==0): ?>
                <a class="nav-link" href="/createrootstory">
                  Hikaye Yaz <i class="fas fa-pen"></i>
                </a>
                <?php elseif(session()->has('user') and session('user.ban')==1): ?> 
                <a class="nav-link" onclick="ban()">
                  Hikaye Yaz <i class="fas fa-pen"></i>
                </a>
              <?php else: ?>
                <a class="nav-link" onclick="noUser()">
                  Hikaye Yaz <i class="fas fa-pen"></i>
                </a>
              <?php endif; ?>
            </li>
            <?php if (session()->has('user')): ?>
              <li class="nav-item">
                <a class="nav-link" href="{{route('logoutuser')}}">
                  Çıkış Yap <i class="fas fa-sign-out-alt"></i>
                </a></li>
              <?php endif; ?>
              <?php if (!session()->has('user')): ?>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('login')}}">
                    Giriş Yap/Kayıt Ol
                  </a>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
@yield('profil');

          @yield('content');
      



      

      <footer class="page-footer font-small unique-color-dark pt-4">
        <div class="container">
          <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
              <p class="mb-1">İletişim için </p>
            </li>
            <li class="list-inline-item">
    
              <a href="mailto:hakan_61_601@hotmail.com" class="font-weight-bold"><i class="fas fa-envelope mr-1"></i> Mail</a>
    
            </li>
          </ul>
        </div>
        <div class="footer-copyright text-center py-1">© 2018 Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
      </footer>
    </body>
    </html>

