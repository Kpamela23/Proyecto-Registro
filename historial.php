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
    <title>Historial Academico</title>
    <link rel="icon" href="img/logo-unah.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>

    <?php
        include('php/header.php');
        include('php/navbar2.php');
    ?>

    <div class="container" style="text-align: left">
          <h1 style="font-family: Candara;">Nombre: <?php echo $_SESSION["nombre"]?></h1>
          <h3 style="font-family: Candara;">Carrera: <?php echo $_SESSION["carrera"]?></h3>
          <h4 style="font-family: Candara;">Centro Universitario: <?php echo $_SESSION["centro"]?></h4>
    </div>

    <div class="container" style="font-family: Candara; margin-right:auto; margin-left:auto;">
        <table style="margin-left:auto; margin-right:auto" >
            <thead style="border:1px solid; text-align: center">
                <td ><h5> <b> Código  </b>&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;</h5></td>
                <td><h5><b>Asignatura </b> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;</h5></td> 
                <td><h5><b>Sección  </b>&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;</h5></td> 
                <td><h5><b> U.V.  </b>&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;</h5></td> 
                <td><h5><b> Calificacion  </b>&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;</h5></td>
                <td><h5><b> Periodo </b>&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;</h5></td> 
            </thead>
            <tbody  style="border:1px solid; text-align: center">
            
            </tbody>
        </table>
    </div>


    <?php
        include('php/footer.php');
    ?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>