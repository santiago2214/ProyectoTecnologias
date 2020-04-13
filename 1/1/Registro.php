


<!doctype html>
<html lang="en">
  <head>

<!-------------------------------------------------CONEXION BASE DE DATOS FIREBASE-------->

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAbA_BUTFIAwrg6cYKdOY9RoaM_uKDx3qM",
    authDomain: "usuarios-ff59c.firebaseapp.com",
    databaseURL: "https://usuarios-ff59c.firebaseio.com",
    projectId: "usuarios-ff59c",
    storageBucket: "usuarios-ff59c.appspot.com",
    messagingSenderId: "62931325734",
    appId: "1:62931325734:web:fc4bbd154db7da8a8467e7",
    measurementId: "G-GXQNT903YN"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<!-------------------------------------------------//CONEXION BASE DE DATOS FIREBASE-------->

<!---------------------------------------------CONEXION ARCHIVO APP FIREBASE----------------->

<script src="app.js">
  
</script>
<!---------------------------------------------///CONEXION ARCHIVO APP FIREBASE----------------->



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--   LINK WITH STYLE SHEET-->
    <link rel="stylesheet" type="text/css" href="styleSesion.css">

    <!--- LINK WITH GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600&display=swap" rel="stylesheet">

        <!-- LINK WITH ICON PAGE -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>


    <title>Registro de Usuario</title>
  </head>



  <!-- INICIO DE LA PAGINA WEB WIKIAPRENDE-->
  <body>
    <!--NAV BAR. BARRA DE MENÚ-->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container"> 
   <a class="navbar-brand" href="index.php"><img src="images/logo1.png" alt="logo" class="logo-brand"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <ion-icon name="menu-outline"></ion-icon>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inicioSesion.php">Inicio de Sesión</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="Registro.php">Crear una cuenta</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Campos de Acción
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="modelado3d.php"id="modelado">Modelado 3d</a>
            <a class="dropdown-item" href="programacion.php"id="programacion">Programación</a>
            <a class="dropdown-item" href="render.php"id="render">Render</a>
            <a class="dropdown-item" href="animacion.php"id="animacion">Animación</a>
            <a class="dropdown-item" href="fx.php"id="fx">Efectos Especiales</a>
            <a class="dropdown-item" href="ia.php"id="ai">Inteligencia Artificial </a>
          </div>
        </li>
      </ul>
    </div>
    </div>
  </nav>


  <section id="hero">
    <div class="container">
      <div class="content-center topmaring">
        

      <!-- Default form login -->
<form class="text-center border border-light p-5" action="#!" autocomplete="off">

    <p class="h4 mb-4">Crear una Cuenta</p>

    <!-- Nombre de Usuario -->
    <input type="name" id="name" class="form-control mb-4" placeholder="Nombre de Usuario">

    <!-- Email -->
    <input type="email" id="email" class="form-control mb-4" placeholder="Correo Electrónico">

    <!-- Password -->
    <input type="password" id="password" class="form-control mb-4" placeholder="Contraseña" name="clave1">

    <!-- Password -->
    <input type="password" id="password" class="form-control mb-4" placeholder="Repetir la Contraseña" name="clave2">




    <!-- Sign in button -->
    <button onclick="registrar()" class="btn btn-info btn-block my-4" type="submit">REGISTRARME</button>

    <!-- Register -->
    <p>Tengo una Cuenta
        <a href="inicioSesion.php">Quiero Ingresar</a>
    </p>

   
</form>
<!-- Default form login -->


      </div>
    </div>
   </section>


</body>
<!--CIERRE DEL BODY -->

<!--INICIO DEL FOOTER -->
<!-- Footer -->
<footer class="mt-6 page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container">

   
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <h6>WikiMedia</h6>
        <p style="line-height: 1.7rem">Wikimedia es una wiki de contenidos relacionados a la Multimedia y editada de manera colaborativa realizada por Santiago Becerra e Ivan Montesino</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text"> </i>
          </a>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>