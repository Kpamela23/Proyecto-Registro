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
                                <img class="card-img-top" src="img/seccion3.png" alt="Card image cap">
                                </a>
                        <div class="card-body">
                                 <h5 class="card-title">
                                        <!-- Button trigger modal -->
                                        <button id="btn-adicionar-seccion"  type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-seccion">
                                         Crear Sección
                                        </button>            
                                </h5>
             <p class="card-text">Crear Nueva sección</p>
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
                  <!-- Modal -->
                  <div class="modal fade" id="modal-seccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
              <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title">Llenar el siguiente Formulario</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form >
                     <div class="form-group">
                                <input type="text" class="form-control" id="codigo-seccion" placeholder="Codigo">
                                <br>
                                <select class="form-control" name="clase" id="asignatura-seccion">
                                        <option value="0">Asignatura</option>
                                        <?php
                                          $carrera = $_SESSION['carrera'];
                                          $archivo = fopen("carreras/$carrera.json","r");
                                          while(($linea = fgets($archivo))){
                                              $registro = json_decode($linea,true);
                                              echo  '<option value="'.$registro['codigo'].",".$registro['asignatura'].'">'.$registro['codigo'] . "   " . $registro['asignatura'].'</option>';  
                                              }
                                              fclose($archivo);
                                        ?>
                              </select>
                                <br>
                                <input type="text" class="form-control" placeholder="Unidad Valorativa" id="uv-seccion" name="txt-nombre" >
                                <br>
                                 <input type="text" class="form-control" placeholder="Días" id="dias-seccion" name="txt-nombre">
                                 <br>
                                <input type="text" class="form-control" placeholder="Centro" id="centro-seccion" name="txt-nombre">                                            
                        </div>
                 </form>
            </div>
            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
           <button type="button" class="btn btn-primary" id="btn-agregar-seccion">Adicionar</button>
           </div>
            </div>
            </div>
            </div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/controlador.js"></script>
</body>
</html>

