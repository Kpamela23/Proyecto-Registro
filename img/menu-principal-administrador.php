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
    <link href="css/estilos2.css" rel="stylesheet">    
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
          <div class="card-group " >
          <div class="card " >
             <a href="#">
            <img class="card-img-top imagen:hover grow:hover" src="img/estudiante.png" alt="Card image cap" >
            </a>
            <div class="card-body">
            <h5 class="card-title">
                                
            <!-- Button trigger modal -->
            <button type="button" id="btn-adicionar-alumno" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
             Adicionar Estudiante
            </button>

            <!-- Modal -->
             <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
             <div class="modal-dialog" role="document">
             <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Llenar el siguiente Formulario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                  <input id="Usuario" type="text" class="form-control" placeholder="Codigo de Usuario">
                  <br>
                  <input id="Password"type="text" class="form-control" placeholder="Contraseña">
                  <br>
                  <input id="Tipo" type="text" class="form-control" placeholder="Tipo de Usuario" >
                  <br>
                  <input id="Nombre" type="text" class="form-control" placeholder="Nombre de Usuario">
                  <br>
                  <input id="Carrera" type="text" class="form-control" placeholder="Carrera">
                  <br>
                  <input id="CE" type="text" class="form-control" placeholder="Centro de Estudio">
                    </div>
                </form>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="btn-agregar">Adicionar</button>
          </div>
              </div>
            </div>
          </div>
          </h5>
           <p class="card-text">Matricular un nuevo Estudiante</p>
            </div>
      </div> &nbsp; &nbsp; &nbsp; &nbsp;


         <div class="card">
           <a href="#">
           <img class="card-img-top" src="img/docente2.png" alt="Card image cap">
          </a>
            <div class="card-body">
            <h5 class="card-title">  
                      <!-- Button trigger modal -->
                      <button id="btn-adicionar-docente" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                      Adicionar Docente
                      </button>

                      <!-- Modal -->
             <div class="modal fade" id="modal-docente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
             <div class="modal-dialog" role="document">
             <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Llenar el siguiente Formulario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form>
                                <div class="form-group">

                                <input type="text" class="form-control" placeholder="Codigo de Usuario">
                                <br>
                                <input type="text" class="form-control" placeholder="Contraseña" id="txt-nombre" name="txt-nombre">
                                <br>
                                <input type="text" class="form-control" placeholder="Tipo de Usuario" id="txt-nombre" name="txt-nombre" >
                                <br>
                                <input type="text" class="form-control" placeholder="Nombre de Usuario" id="txt-nombre" name="txt-nombre">
                                <br>
                                <input type="text" class="form-control" placeholder="Carrera" id="txt-nombre" name="txt-nombre">
                                <br>
                                <input type="text" class="form-control" placeholder="Centro" id="txt-nombre" name="txt-nombre">
                                <br>
                               </div>

                              </form>
            </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
           <button type="button" class="btn btn-primary" >Adicionar</button>
           </div>
            </div>
            </div>
            </div>
            </h5>
             <p class="card-text">Matricular un nuevo docente</p>
             </div>
          </div>&nbsp; &nbsp; &nbsp; &nbsp;
        

             <div class="card">
             <a href="#">
              <img class="card-img-top" src="img/seccion3.png" alt="Card image cap">
              </a>
              <div class="card-body">
               <h5 class="card-title">

                      <!-- Button trigger modal -->
                      <button id="btn-adicionar-seccion" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                       Crear Sección
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="modal-seccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
              <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle">Llenar el siguiente Formulario</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form>
                     <div class="form-group">
                      <input type="text" class="form-control" placeholder="Codigo">
                      <br>
                      <input type="text" class="form-control" placeholder="Asignatura" id="txt-nombre" name="txt-nombre">
                      <br>
                      <input type="text" class="form-control" placeholder="Unidad Valorativa" id="txt-nombre" name="txt-nombre" >
                      <br>
                      <input type="text" class="form-control" placeholder="Requisito" id="txt-nombre" name="txt-nombre">
                      <br>
                       <input type="text" class="form-control" placeholder="Carrera" id="txt-nombre" name="txt-nombre">
                       <br>
                      <input type="text" class="form-control" placeholder="Centro" id="txt-nombre" name="txt-nombre">
                        </div>

                 </form>
            </div>
            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
           <button type="button" class="btn btn-primary" >Adicionar</button>
           </div>
            </div>
            </div>
            </div>
            </h5>
             <p class="card-text">Nueva sección</p>
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
<script src="js/controlador.js"></script>
</body>
</html>

