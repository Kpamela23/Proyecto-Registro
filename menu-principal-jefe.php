<?php 
    session_start();  
    if (!isset($_SESSION["usuario"]))
        header("Location: no-autorizado.html");//Redireccion con PHP
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Principal Jefe de Departamento</title>
    <link rel="icon" href="img/logo-unah.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">   
</head>
<body>

        <?php

          include('php/paginas/header.php');
          include('php/paginas/navbar2.php');

        ?>
<br><br>

<<<<<<< HEAD
        <div class="container" style="text-align: center">
            <h1 style="font-family: Candara;">Bienvenido(a): <?php echo $_SESSION["nombre"];  ?></h1>
        </div>
=======
        <h1>Bienvenido: <?php echo $_SESSION["nombre"];  ?></h1>
>>>>>>> 173af17d580e5fa6847aa78846ac9ad4aefe5f6a
        

        <br><br><br><br>
        <div class="container">
                <div class="card-group">
                        <div class="card">
                            <a href="#">
<<<<<<< HEAD
                              <img class="card-img-top imagen:hover" src="img/creacion-secciones.png" alt="Card image cap" >
                            </a>
                          <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Crear una Sección</a> 
                            </h5>
                            <p class="card-text">Llena el formulario </p>
                          </div>
                        </div> 
                        &nbsp; &nbsp; &nbsp; &nbsp;
                        <div class="card">
                            <a href="#">
                              <img class="card-img-top imagen:hover" src="img/historial-modulo.png" alt="Card image cap" >
                            </a>
                          <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Lis</a> 
                            </h5>
                            <p class="card-text">Llena el formulario </p>
                          </div>
                        </div>
                </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        
=======
                              <img class="card-img-top imagen:hover" src="img/historial-modulo.png" alt="Card image cap" >
                               <!-- <img class="card-img-top" src="img/historial-modulo.png" onmouseover="this.width=500;this.height=400;" onmouseout="this.width=200;this.height=150;" width="200" height="100" />-->
                            </a>
                          <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Crear una Sección</a> 
                            </h5>
                            <p class="card-text">Llena el formulario </p>
                          </div>
                        </div> &nbsp; &nbsp; &nbsp; &nbsp;
                        
                </div>
        </div>


        <?php
>>>>>>> 173af17d580e5fa6847aa78846ac9ad4aefe5f6a

        <?php

          include('php/paginas/footer.php');
      
        ?>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>