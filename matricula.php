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
</head>
<body>

        <?php

          include('php/header.php');
          include('php/navbar2.php');

        ?>

        <br>
        <br>
        

        <div class="container" style="text-align: center">
          <h1 style="font-family: Candara;">Nombre: <?php echo $_SESSION["nombre"]?></h1>
          <h3 style="font-family: Candara;">Carrera: <?php echo $_SESSION["carrera"]?></h3>
        </div>

        <br>
        <br>
        <br>
        <br>

        <div class="container">
                <div class="card-group">
                        <div class="card">
                            <a href="#">
                              <img class="card-img-top imagen:hover" src="img/adicionar-asignatura.png" alt="Card image cap" >
                            </a>
                          <div class="card-body">
                            <h5 class="card-title">
                                <p>Adicionar Asignatura</p> 
                            </h5>
                            <p class="card-text">Aqui puedes matricular tus clases</p>
                          </div>

                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModalCenter">
                            Launch demo modal
                          </button>

                          <!-- Modal -->
                          <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Matricular Clases</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-md-4 col-sm-12 col-xs 12" style="text-align: center; font-family: Candara">
                                        <div>
                                          <h5> <b> Departamento</b></h5>
                                        </div>
                                        <br>
                                        <select name="departamento" id="departamento">
                                          <option value="0">seleccione</option>
                                          <option value="1">Matemática</option>
                                          <option value="2">Letras</option>
                                          <option value="3">Lenguas</option>
                                          <option value="4">Biologia</option>
                                          <option value="5">Quimica</option>
                                          <option value="6">Filosofía</option>
                                        </select>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs 12" style="text-align: center; font-family: Candara">
                                        <div>
                                          <h5><b>Clase</b></h5>
                                        </div>
                                        <br>
                                        <select name="clase" id="clase">
                                          <option value="0">seleccione</option>
                                            
                                        </select>
                                      </div>

                                      <div class="col-md-4 col-sm-12 col-xs 12">
                                        <div>
                                          <h5> Sección</h5>
                                        </div>
                                        
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
                        &nbsp; &nbsp; &nbsp; &nbsp;
                        <div class="card">
                            <a href="#">
                              <img class="card-img-top imagen:hover" src="img/ver-asignaturas.png" alt="Card image cap" >
                            </a>
                          <div class="card-body">
                            <h5 class="card-title">
                                <a href="ver-asignaturas.php">Ver Asignaturas</a> 
                            </h5>
                            <p class="card-text">Aqui puedes ver tus clases matriculadas</p>
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