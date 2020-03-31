<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--   LINK WITH STYLE SHEET-->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--- LINK WITH GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600&display=swap" rel="stylesheet">

        <!-- LINK WITH ICON PAGE -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>


    <title>WikiMedia</title>
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
          <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
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
        <h1>WikiMedia</h1>
        <p>Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>

      </div>
    </div>
   </section>


<section id="areas">
  <div class="container-fluid">
    <div class="content-center">
      <h2>EXPLORE NUESTRAS ÁREAS DE DEPENDENCIA</h2>

    </div>
  </div>
</section>
  <!--
  <div class="row">
    <div class="col-md-6">
      <div class="area-container">
        <div class="area-details">
          <a href="#">
            <h2>Modelado 3D</h2>
          </a>
          <p> Uso de diferentes motores de modelado </p>
        </div>
        <img src="images/section1.jpg" class="img-fluid" alt="area 1">
      </div>
    </div>
  </div>
</section>

<!--TWO COLUMN SECTION -->
  <!--primera seccion -->
<section id="areas-columns">

    <div class="container-fluid padding ">
      <div class=" mt-5 row padding">
        <div class=" col-lg-6">
            <img src="images/section1.jpg" class="img-fluid">
        </div>
        <div class="col-lg-6 ">

           <h2> MODELADO 3D</h2>
          <p>Nos enfocamos en crear modelos 3D con los mayores estandares de diseño.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tellus tortor. Phasellus facilisis id purus a bibendum. Proin gravida, sem at faucibus feugiat, mauris lorem blandit libero, ac iaculis tortor ante at quam. Vivamus magna urna, rhoncus quis sapien ut, iaculis ullamcorper lacus. Ut eu libero elit. Phasellus eget aliquam purus, at volutpat nisi. Nunc eu nibh efficitur, maximus risus imperdiet, egestas odio. Maecenas aliquam metus eu orci condimentum commodo. In felis ante, aliquam auctor egestas tincidunt, varius nec augue. Vestibulum sodales est posuere cursus feugiat. Donec luctus diam velit, vitae </p>
          <a href="modelado3d.php" class="btn btn-primary">Conozca más</a>      
        </div>
      </div>
    </div>
      <!--SEGUNDA seccion -->
    <div class="container-fluid padding ">
      <div class="mt-5 row padding">
        <div class="col-lg-6">
           <h2> PROGRAMACIÓN</h2>
          <p>Nos enfocamos en crear modelos 3D con los mayores estandares de diseño.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tellus tortor. Phasellus facilisis id purus a bibendum. Proin gravida, sem at faucibus feugiat, mauris lorem blandit libero, ac iaculis tortor ante at quam. Vivamus magna urna, rhoncus quis sapien ut, iaculis ullamcorper lacus. Ut eu libero elit. Phasellus eget aliquam purus, at volutpat nisi. Nunc eu nibh efficitur, maximus risus imperdiet, egestas odio. Maecenas aliquam metus eu orci condimentum commodo. In felis ante, aliquam auctor egestas tincidunt, varius nec augue. Vestibulum sodales est posuere cursus feugiat. Donec luctus diam velit, vitae </p>
          <a href="programacion.php" class="btn btn-primary">Conozca más</a>
        </div>
        <div class=" mt-5 col-lg-6 ">
          <img src="images/section2.jpg" class="img-fluid">      
        </div>
      </div>
  </div>

    <!--TERCERA seccion -->
    <div class="container-fluid padding ">
      <div class=" mt-5 row padding">
        <div class=" col-lg-6">
            <img src="images/section3.jpg" class="img-fluid">
        </div>
        <div class="col-lg-6 ">

           <h2> RENDER</h2>
          <p>Nos enfocamos en crear modelos 3D con los mayores estandares de diseño.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tellus tortor. Phasellus facilisis id purus a bibendum. Proin gravida, sem at faucibus feugiat, mauris lorem blandit libero, ac iaculis tortor ante at quam. Vivamus magna urna, rhoncus quis sapien ut, iaculis ullamcorper lacus. Ut eu libero elit. Phasellus eget aliquam purus, at volutpat nisi. Nunc eu nibh efficitur, maximus risus imperdiet, egestas odio. Maecenas aliquam metus eu orci condimentum commodo. In felis ante, aliquam auctor egestas tincidunt, varius nec augue. Vestibulum sodales est posuere cursus feugiat. Donec luctus diam velit, vitae </p>
          <a href="render.php" class="btn btn-primary">Conozca más</a>      
        </div>
      </div>
    </div>
      <!--CUARTA seccion -->
    <div class="container-fluid padding ">
      <div class="mt-5 row padding">
        <div class="col-lg-6">
           <h2> ANIMACIÓN</h2>
          <p>Nos enfocamos en crear modelos 3D con los mayores estandares de diseño.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tellus tortor. Phasellus facilisis id purus a bibendum. Proin gravida, sem at faucibus feugiat, mauris lorem blandit libero, ac iaculis tortor ante at quam. Vivamus magna urna, rhoncus quis sapien ut, iaculis ullamcorper lacus. Ut eu libero elit. Phasellus eget aliquam purus, at volutpat nisi. Nunc eu nibh efficitur, maximus risus imperdiet, egestas odio. Maecenas aliquam metus eu orci condimentum commodo. In felis ante, aliquam auctor egestas tincidunt, varius nec augue. Vestibulum sodales est posuere cursus feugiat. Donec luctus diam velit, vitae </p>
          <a href="animacion.php" class="btn btn-primary">Conozca más</a>
        </div>
        <div class=" mt-6 col-lg-6 ">
          <img src="images/section4.jpg" class="img-fluid">      
        </div>
      </div>
  </div>


    <!--QUINTA seccion -->
    <div class="container-fluid padding ">
      <div class=" mt-5 row padding">
        <div class=" col-lg-6">
            <img src="images/section5.jpg" class="img-fluid">
        </div>
        <div class="col-lg-6 ">

           <h2> EFECTOS ESPECIALES</h2>
          <p>Nos enfocamos en crear modelos 3D con los mayores estandares de diseño.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tellus tortor. Phasellus facilisis id purus a bibendum. Proin gravida, sem at faucibus feugiat, mauris lorem blandit libero, ac iaculis tortor ante at quam. Vivamus magna urna, rhoncus quis sapien ut, iaculis ullamcorper lacus. Ut eu libero elit. Phasellus eget aliquam purus, at volutpat nisi. Nunc eu nibh efficitur, maximus risus imperdiet, egestas odio. Maecenas aliquam metus eu orci condimentum commodo. In felis ante, aliquam auctor egestas tincidunt, varius nec augue. Vestibulum sodales est posuere cursus feugiat. Donec luctus diam velit, vitae </p>
          <a href="fx.php" class="btn btn-primary">Conozca más</a>      
        </div>
      </div>
    </div>

      <!--SEXTA seccion -->
    <div class="container-fluid padding ">
      <div class="mt-5 row padding">
        <div class="col-lg-6">
           <h2>INTELIGENCIA ARTIFICIAL</h2>
          <p>Nos enfocamos en crear modelos 3D con los mayores estandares de diseño.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tellus tortor. Phasellus facilisis id purus a bibendum. Proin gravida, sem at faucibus feugiat, mauris lorem blandit libero, ac iaculis tortor ante at quam. Vivamus magna urna, rhoncus quis sapien ut, iaculis ullamcorper lacus. Ut eu libero elit. Phasellus eget aliquam purus, at volutpat nisi. Nunc eu nibh efficitur, maximus risus imperdiet, egestas odio. Maecenas aliquam metus eu orci condimentum commodo. In felis ante, aliquam auctor egestas tincidunt, varius nec augue. Vestibulum sodales est posuere cursus feugiat. Donec luctus diam velit, vitae </p>
          <a href="ia.php" class="btn btn-primary">Conozca más</a>
        </div>
        <div class=" mt-6 col-lg-6 ">
          <img src="images/section6.jpg" class="img-fluid">      
        </div>
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
        <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem
          aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
          explicabo.
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
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