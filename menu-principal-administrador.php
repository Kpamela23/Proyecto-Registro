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
    <title>Menu Principal Administrador</title>
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

        <h1>Bienvenido: <?php echo $_SESSION["nombre"];  ?></h1>
        
        <br><br><br><br>
        <div class="container">
                <div class="card-group">
                        <div class="card">
                            <a href="#">
                              <img class="card-img-top imagen:hover" src="img/historial-modulo.png" alt="Card image cap" >
                               <!-- <img class="card-img-top" src="img/historial-modulo.png" onmouseover="this.width=500;this.height=400;" onmouseout="this.width=200;this.height=150;" width="200" height="100" />-->
                            </a>
                          <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Adicionar Estudiantes</a> 
                            </h5>
                            <p class="card-text"> Matricular un nuevo estudiante</p>
                          </div>
                        </div> &nbsp; &nbsp; &nbsp; &nbsp;
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top" src="img/matricula-modulo.png" alt="Card image cap">
                            </a>
                          <div class="card-body">
                            <h5 class="card-title">
                                <a href="matricula.html">Adicionar docente</a>
                            </h5>
                            <p class="card-text">Matricular un nuevo docente</p>
                          </div>
                        </div>&nbsp; &nbsp; &nbsp; &nbsp;
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top" src="img/lab-modulo.png" alt="Card image cap">
                            </a>
                          <div class="card-body">
                            <h5 class="card-title">
                                <a href="#"> Crear Sección</a>
                            </h5>
                            <p class="card-text">Nueva sección</p>
                          </div>
                        </div>
                </div> <br><br>
               
        </div>


        <?php

          include('php/paginas/footer.php');
      
        ?>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>