<!doctype html>

<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mis Aportes</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1">


  <!---------------------------LINK SHORTICON O LLAMADO FAVICON------ -->
<link rel="icon" type="image/png" href="images/logo1.png">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
   

    <!--LINK WITH STYLESHEET -->
    <link rel="stylesheet" href="estilos/stylePerfil.css">

<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="Usuario1.php"><i class="menu-icon fa fa-laptop"></i>Inicio</a>
                    </li>
                    <li class="menu-title">Herramientas</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                       
                        <a href="#"> <i class="menu-icon ti-timer"></i>Últimos Cambios</a> 
                        <a href="#"> <i class="menu-icon ti-hand-open"></i>Mis Aportes </a>
                        <a href="reporteError.php"> <i class="menu-icon ti-world"></i>Reporta un Error</a>

            <button onclick="cerrar()" id="botonSalir" class="btn btn-info btn-block my-4" type="submit" value="send">Cerrar Sesión</button>



                    </li>
  
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        
                    <div class="user-area dropdown float-right">

                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/usuario/user-male-icon.png" alt="User Avatar">
                        </a>
                        
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Mi Perfil</a>

                            <a class="nav-link" onclick="cerrar()"><i class="fa fa-power -off"></i>Salir</a>
                           <!-- <button onclick="cerrar()"> Cerrar Sesión</button>-->
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
            <div class="row">
                    

                    
                </div>
                <!-- /Widgets -->
               
                <div class="clearfix"></div>
                <div class="card weather-box">
                            <h4 class="weather-title box-title">Mis Aportes </h4>
                            <div class="card-body">
                                <div class="weather-widget">
                                    <div id="weather-one" class="weather-one"></div>
                                		<div id="sample">

                                            <table class="table my-3" >
                                                <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Descripción</th>
                                                    <th scope="col">Área </th>
                                                    <th scope="col">Eliminar </th>
                                                    <th scope="col">Editar</th>
                                                </tr>    
                                                </thead>
                                                <tbody id="tabla">
                                                    
                                                </tbody>
                                                </table>						  
                                    <br>								 
									</div>
									<!----------------------------------OPCIONES-------------------------->
	                          </div>
                            </div>
                        </div><!-- /.card -->
                     <br>
                


                <div class="clearfix"></div>
                <div class="card weather-box">
                            <h4 class="weather-title box-title">Editor de Texto </h4>
                            <div class="card-body">
                                <div class="weather-widget">
                                    <div id="weather-one" class="weather-one"></div>
                                
                                        <div id="sample">
                                          <!--  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
                                            <script type="text/javascript">
                                    //<![CDATA[
                                            bkLib.onDomLoaded(function() { new nicEditor().panelInstance("texto")});
                                      //]]>
                                      </script>-->

                                     <form class="text-center border border-light p-5" method="post">
                                      <textarea name="area3" style="width: 100%;" placeholder="Escriba en este espacio su texto." id="texto">
                                           
                                    </textarea>
                                    <br>

                                    <p class="h5 mb-4">Seleccione la categoría</p>
                                    <select id="datoModelo" class="selectpicker" data-size="3" name="categoria">
                                        <option data-icon="fa-heart">Modelado 3D</option>
                                        <option>Programación</option>
                                        <option>Render</option>
                                        <option>Animación</option>
                                        <option>Efectos Especiales</option>
                                        <option>Inteligencia Artificial</option>
                                    </select>
                                    </form>
                                    <br />
                                     
                                    </div>
                                    <!----------------------------------OPCIONES-------------------------->
                        <button class="btn btn-info" id="boton" onclick="guardar()">Guardar </button>
                                    


                                </div>
                            </div>
                        </div><!-- /.card -->

                    <div class="col-lg-4 col-md-6">
                        <div class="card ov-h">

                            
                        </div><!-- /.card -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                       
                    </div>
                </div>


                <!-- /Calender Chart Weather -->
                <!-- Modal - Calendar - Add New Event -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#event-modal -->
                <!-- Modal - Calendar - Add Category -->
                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add a category </strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        WikiMedia
                    </div>
                    <div class="col-sm-5 text-right">
                        Copyright© 2020 
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->
<!-----------------------------------------------FIRESTORE------------------------------------------------------->

<!---------------------------------------------FIREBASE------------------------>
<script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>

<script>
    
firebase.initializeApp({
  apiKey: 'AIzaSyAbA_BUTFIAwrg6cYKdOY9RoaM_uKDx3qM',
  authDomain: 'usuarios-ff59c.firebaseapp.com',
  projectId: "usuarios-ff59c"
});

var db = firebase.firestore();


/*--------------------------------------------------LEER DATOS DE FIRESTONE--------------------------------*/
var tabla = document.getElementById('tabla');

db.collection("users").onSnapshot((querySnapshot) => {
    tabla.innerHTML = '';
    querySnapshot.forEach((doc) => {
        console.log(`${doc.id} => ${doc.data().first}`);
        tabla.innerHTML  += `
        <tr>
         <th scope="row">${doc.id} style("</th>
            <td>${doc.data().first}</td>
            <td>${doc.data().last}</td>
            <td><button class="btn btn-danger" onclick="eliminar('${doc.id}')">Eliminar</td>
            <td><button class="btn btn-warning" onclick="editar"('${doc.id}','${doc.data().first}','${doc.data().last}')>Editar</td>
         </tr>
         `
    });
});

/*--------------------------------------------------LEER DATOSS DE FIRESTONE--------------------------------*/
function eliminar(id){

    db.collection("users").doc(id).delete().then(function() {
        alert("El dato se ha eliminado correctamente");
    }).catch(function(error) {
        console.error("Error al eliminar la información ", error);
    });

}

<!-- /*----------------------------VENTANA EMERGENTE PARA ACTUALIZAR DATOS-------------------------------------*/-->
 
/*---------------------------------------------Editar datos ingresados a la base de datos---------------------------*/
function editar(id,texto,datoModelo){
   

    document.getElementById('texto').value = texto;
    document.getElementById('datoModelo').value = datoModelo;
    var boton = document.getElementById('boton');
    boton.innerHTML = 'Editar';

    boton.onclick=function(){
        var washingtonRef = db.collection("users").doc(id);

        var texto = document.getElementById('texto').value;
        var datoModelo = document.getElementById('datoModelo').value;

    return washingtonRef.update({
        first: texto,
       last:datoModelo,
    })
    .then(function() {
        console.log("Document successfully updated!");
        boton.innerHTML = 'Guardar';
    })
    .catch(function(error) {
        // The document probably doesn't exist.
        console.error("Error updating document: ", error);
    });

    }
    
}


</script>




<!----------------------------------//CIERRE FIRESTORE------------------------------------------------------->

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
botonSalir
/*------------------------------------------------salir de cuenta----------------------------------------------------*/
        function cerrar(){
    firebase.auth().signOut()
    .then(function(){

       var miVentana;
      window.location.href='login2.php';


      console.log('Salir');
    })
    .catch(function(error){
      console.log(error);
    })
   }
   </script>




   <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
   

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    
    

    <!--Local Stuff-->
   
</body>
</html>
