<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1">    

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="dist/css/main.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title -->
    <title>@yield('title')</title> 
    
    <!-- Icon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

</head>

<body>

  <div class="intro">    

    <!-- =================== SITE HEADER BEGINS ============================= -->  
      <header>
            <h1 class="logo"><a href="#"><img src="images/logo-americalatina.png" alt="América Latina"></a></h1>
            <input type="checkbox" name="menu" id="menu">
            <label class="nav" for="menu"> 
                <span></span> 
            </label>
            <nav class="navigation">
                <ul>
                    <li><a href="index.html" class="activo"><img src="images/ico-home.svg" alt="" /></a></li>
                    <li><a href="#">Organización</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="quienes-somos.html">¿Quiénes somos?</a></li>
                                <li><a href="mision-vision.html">Misión y visión</a></li>
                                <li><a href="organigrama.html">Organigrama</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="noticias.html">Noticias</a></li>
                    <li><a href="traducciones.html">Traducciones</a></li>
                    <li><a href="transmisiones.html">Transmisiones</a></li>
                    <li><a href="testimonios.html">Testimonios</a></li>
                    <li><a href="preguntas-frecuentes.html">Preguntas frecuentes</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                </ul>
            </nav>
        </header>
    <!-- =================== SITE HEADER ENDS ============================= -->
    <!--
    ========================================================
                            CONTENT
    ========================================================
    -->
    <div class="content">

      @yield('content')
      
    </div>
    <!-- =================== MAIN SECTION ENDS ============================= -->
  
  </div>

  @include('layouts.maps')

  <!-- =================== SITE FOOTER BEGINS ============================= -->

  <footer class="footer text-center">

    @include('layouts.footer')

  </footer><!-- footer ends -->

  <!-- =================== SITE FOOTER ENDS ============================= -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script> 
  
  <script src="dist/js/main.js"></script>

  @stack('scripts')

</body>

</html>