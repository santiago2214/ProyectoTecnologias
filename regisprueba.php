<!DOCTYPE html>
<html>
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


	<title></title>
</head>
<body>

	<input type="email" id="email" placeholder="ingresa email">
	<input type="password" id="password" placeholder="ingresa contraseña">
	<button onclick="registrar()"> Enviar</button>

	<script src="app.js"></script>


</body>
</html>