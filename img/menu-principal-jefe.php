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

          include('php/header.php');
          include('php/navbar2.php');

        ?>
<br><br>

        <div class="container" style="text-align: center">
            <h1 style="font-family: Candara;">Bienvenido(a): <?php echo $_SESSION["nombre"];  ?></h1>
        </div>
        

        <br><br><br><br>
        <div class="container">
                <div class="card-group">
                        <div class="card">
                            <a href="#">
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


        

        <?php

          include('php/footer.php');
      
        ?>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

