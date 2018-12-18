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
    <title>Menu Principal Estudiantes</title>
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

        <br><br>

      <div class="container" style="text-align: center">
        <h1 style="font-family: Candara;">Bienvenido(a): <?php echo $_SESSION["nombre"];  ?></h1>
      </div>

        <br><br><br><br>
        <div class="container">
               
          <i style="color:#2d6c9f; font-size:50px" class="fas fa-book">
            &nbsp; &nbsp;&nbsp;
            <a href="matricula.php" style="font-size:30px; font-family: Sans;"> Matricula</a>
          </i> 

          <br><br><br>
          <br>

          <i style="color:#2d6c9f; font-size:50px" class="fas fa-clipboard-list">
            &nbsp; &nbsp;&nbsp;
            <a href="#" style="font-size:30px; font-family: 'Raleway', sans serif;"> Historial Academico</a>
          </i> 

          <br><br><br>
          <br>
            

          <i style="color: #2d6c9f; font-size:50px" class="fas fa-user-check">
            &nbsp; &nbsp;
            <a href="#" style="font-size:30px; font-family: 'Raleway', sans serif;">Evaluar Docentes</a>
          </i>  
                        
                                

                            
                </div>
        </div>
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