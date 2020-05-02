  
<!doctype html>
<html lang="en">
  <head>
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
    <title>Inicio de Sesión</title>
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
          <a class="nav-link" href="login.php">Inicio de Sesión</a>
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
        


      <!-------------------- Default form login -------------------------------------->
<form class="text-center border border-light p-5" method="post">
    <p class="h4 mb-4">Ingresa con tus Datos</p>
	
    <!-- Email -->
    <input type="email" id="Email" name="defaultLoginFormEmail" class="form-control mb-4" placeholder="Correo Electrónico">
    <!-- Password -->
    <input type="password" id="Password" name="defaultLoginFormPassword" class="form-control mb-4" placeholder="Contraseña">
    

        <!-- Sign in button -->
    <button id="botonLogeo" class="btn btn-info btn-block my-4" type="submit" value="send">Ingresar</button>

    <h1 id="login"> </h1>
    <div id="contenido"> </div>




    <!-- Register -->
    <p>Aún no tengo una Cuenta
        <a href="signup.php">Quiero Registrarme</a>
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



    <!-------------------------------------------------FIREBASE--------------------------------------------------->


    	<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>

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

/*---------------------autentificación de usuarios---------------------------------------------------------------*/
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    var displayName = user.displayName;
    var email = user.email;
    var emailVerified = user.emailVerified;
    var photoURL = user.photoURL;
    var isAnonymous = user.isAnonymous;
    var uid = user.uid;
    var providerData = user.providerData;
    ventanaUsuario(url);
    document.getElementById('login').innerHTML="LOGUEADO "+ user.email;
     //window.location("Usuario1.php");
    //ventanaUsuario(url);
  } else {
    document.getElementById('login').innerHTML="NO LOGUEADO ";
    window.location("Usuario1.php");
    
  }
});

 function acceso(){
        var emailA=document.getElementById('emailA').value;
        var passA=document.getElementById('passwordA').value;
        firebase.auth().signInWithEmailAndPassword(emailA, passA)
        .catch(function(error) {
            var errorCode = error.code;
            var errorMessage = error.message;
            alert(errorMessage);
        });
   }




   	document.getElementById("botonLogeo").addEventListener("click", function (e){

   		e.preventDefault();

	  		var email1 = document.getElementById('Email').value;
	  		var password1 = document.getElementById('Password').value;

	  		firebase.auth().signInWithEmailAndPassword(email1, password1).
	  		then(function (data){
	  			console.log(data)
	  		})
	  		.catch(function(error) {

			/*const promise = auth.signInWithEmailAndPassword(email1.value, password1.value);
			promise.catch (e=> alert(e.message));*/
			alert("signed in. email"+email+"password"+password);

	  var errorCode = error.code;
	  var errorMessage = error.message;
	  
	});
   	})




	    /*----------------------------------------autentificación y estado de cuenta-----------------------*/
	function observador(){
		firebase.auth().onAuthStateChanged(function(user) {
		  if (user) {

				console.log('Existe usuario activo');
        ventanaUsuario(url);
        var displayName = user.displayName;
		    var email = user.email;
		    var emailVerified = user.emailVerified;
		    var photoURL = user.photoURL;
		    var isAnonymous = user.isAnonymous;
		    var uid = user.uid;
		    var providerData = user.providerData;

		  } else {

		  	console.log('no existe usuario activo');

		  }
		});
	}

        function ventanaUsuario(url){
          window.open(url,"Usuario1.php","width=100,height=500, scrollbars=NO");
        }


//	observador();

</script>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

