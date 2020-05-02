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
          <a class="nav-link" href="login2.php">Inicio de Sesión</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="signup.php">Crear una cuenta</a>
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
        <p><BR><BR> ¡Wikimedia es tu espacio!<BR> Aquí puedes crear artículos sobre un mismo tema encaminado a la multimedia, de esta forma cada usuario aporta un poco de su conocimiento para Wikimeda que cada día es más grande y completa, creando de esta forma una comunidad  colectiva de usuarios que nos une un mismo fin "LA MULTIMEDIA" </p>

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
          
          <p>Los modelos 3D representan un objeto tridimensional usando una colección de puntos en el espacio dentro de un espacio 3D, conectados por varias entidades geométricas tales como triángulos, líneas, superficies curvas, etc. Siendo una colección de datos (puntos y otro tipo de información), los modelos 3D pueden ser hechos a mano, a través de algoritmos o bien escaneados.

Los modelos 3D son ampliamente usados en gráficos 3D. De hecho, su uso pre-data se extiende al uso de gráficos 3D en ordenadores. Algunos videojuegos usan imágenes pre-renderizadas de modelos 3D como sprites antes de que los ordenadores pudieran renderizarlas en tiempo real. </p>
          <a href="modelado3d.php" class="btn btn-primary">Conozca más</a>      
        </div>
      </div>
    </div>
      <!--SEGUNDA seccion -->
    <div class="container-fluid padding ">
      <div class="mt-5 row padding">
        <div class="col-lg-6">
           <h2> PROGRAMACIÓN</h2>
          <p>Es un lenguaje formal que, mediante una serie de instrucciones, le permite a un programador escribir un conjunto de órdenes, acciones consecutivas, datos y algoritmos para, de esa forma, crear programas que controlen el comportamiento físico y lógico de una máquina</p>
         
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
          <p>El Render es una imagen digital que se crea a partir de un modelo o escenario 3D realizado en algún programa de computadora especializado, cuyo objetivo es dar una apariencia REALISTA desde cualquier perspectiva del modelo.

 

Este modelo 3D se somete a diversos procesos, que con el uso de técnicas de texturizado de materiales, iluminación, distribución, así como técnicas fotográficas, crean una serie de efectos ópticos que se asemejan a una situación específica en el mundo real, dando como resultado una imagen Fotorrealista, es decir, que aparenta ser una Fotografía (la meta más común de los artistas 3D).</p>
          
          <a href="render.php" class="btn btn-primary">Conozca más</a>      
        </div>
      </div>
    </div>
      <!--CUARTA seccion -->
    <div class="container-fluid padding ">
      <div class="mt-5 row padding">
        <div class="col-lg-6">
           <h2> ANIMACIÓN</h2>
          <p>La animación es el proceso que logra dar movimiento a dibujos u objetos inanimados por lo general. Esto es posible gracias a una secuencia de dibujos o fotografías que al estar ordenadas consecutivamente logran generar un movimiento creíble ante nuestros ojos, los cuales se prestan al juego de la ilusión visual</p>
          
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
          <p>En el teatro y en el cine, los efectos especiales son la serie de técnicas y herramientas que se utilizan con el fin de crear un ambiente especialmente realista para el público, haciendo de ciertos aspectos, como la escenografía o el sonido, una especie de “puerta” para que la audiencia se sienta parte del espectáculo. El uso de estos nace como parte de la creciente necesidad de provocar cierto impacto en el público, no sólo con la historia, sino con el ambiente en donde esta se desarrolla; en el cine, por su parte, este ayuda con el aspecto estético del ambiente, jugando con las formas y los colores, o creando por completo un mundo de fantasía</p>
          
          <a href="fx.php" class="btn btn-primary">Conozca más</a>      
        </div>
      </div>
    </div>

      <!--SEXTA seccion -->
    <div class="container-fluid padding ">
      <div class="mt-5 row padding">
        <div class="col-lg-6">
           <h2>INTELIGENCIA ARTIFICIAL</h2>
          <p>La inteligencia artificial (IA) hace posible que las máquina aprendan de la experiencia, se ajusten a nuevas aportaciones y realicen tareas como hacen los humanos. La mayoría de los ejemplos de inteligencia artificial de los que usted escucha hoy día – desde computadoras que juegan ajedrez hasta automóviles que se conducen por sí solos – se sustentan mayormente en aprendizaje a fondo (deep learning) y procesamiento del lenguaje natural. Mediante el uso de estas tecnologías, las computadoras pueden ser entrenadas para realizar tareas específicas procesando grandes cantidades de datos y reconociendo patrones en los datos.</p>
      
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