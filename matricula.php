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
    <title> Matricula Estudiantes</title>
    <link rel="icon" href="img/logo-unah.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">   
    <link href="fontawesome/css/all.css" rel="stylesheet"> 
</head>
<body>

        <?php

          include('php/header.php');
          include('php/navbar2.php');

        ?>

        <br>
        <br>
        

        <div class="container" style="text-align: left">
          <h1 style="font-family: Candara;">Nombre: <?php echo $_SESSION["nombre"]?></h1>
          <h3 style="font-family: Candara;">Carrera: <?php echo $_SESSION["carrera"]?></h3>
          <h4 style="font-family: Candara;">Centro Universitario: <?php echo $_SESSION["centro"]?></h4>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="container">
          <div class="row">
       
        
            <div class="col-6" style="text-align:center">
              <i style="color:#2d6c9f; font-size:80px" class="far fa-plus-square"></i>
              <br>
              <br>
              <p style="font-size: 19px">Aqui puedes matricular tus clases del periodo</p>
            <br>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalCenter">
                   Matricular
                </button>

                
                  <!-- Modal -->
              <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Matricular Clases: <?php echo $_SESSION["carrera"]?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                      <div class="modal-body">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs 12" style="text-align: center; font-family: Candara">
                              <div>
                                <h5><b>Clase</b></h5>
                              </div>
                              <br>
					                    <select class="form-control" name="clase" id="clase">
                                        <?php
                                          $carrera = $_SESSION['carrera'];
                                          $archivo = fopen("carreras/$carrera.json","r");
                                          while(($linea = fgets($archivo))){
                                              $registro = json_decode($linea,true);
                                              echo  '<option>'.$registro['codigo'] . "   " . $registro['asignatura'].'</option>';  
                                              }
                                              fclose($archivo);
                                        ?>
                              </select>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs 12">
                              <div>
                                <h5> Sección</h5>
                              </div>
                                        <br>
                              <select class="form-control" name="seccion" id="seccion">
                                <option value="0">seleccione</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Matricular</button>
                      </div>                         
                    </div>
                  </div>
                </div>
              </div> 
            


            <div class="col-6" style="text-align:center">
              <i style="color:#2d6c9f; font-size:50px" class="fas fa-tasks">
                <br>
                <br>
                
                <a href="ver-asignaturas.php" style="font-size:30px; font-family: Sans;">Ver Asignaturas</a>
              </i>
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
<script src="js/controlador.js"></script>
</body>
</html>