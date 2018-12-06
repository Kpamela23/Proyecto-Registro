<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pagina Principal</title>
    <link rel="icon" href="img/logo-unah.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
   
</head>
<body>
    
      <?php
  
        include('php/paginas/header.php');
        include('php/paginas/navbar.php');

      
      ?> 
  
    
      <br> <br> 
     
    <div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/fondo-estudiantes.jpeg" alt="First slide">
            <div class="carousel-caption">
              <h3>Slide #1</h3>
              <p>Aqui una pequeña descripcion</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/fondo-maestros.jpeg" alt="Second slide">
            <div class="carousel-caption">
                <h3>Slide #2</h3>
                <p>Aqui una pequeña descripcion</p>
            </div>
          </div>
        
          <div class="carousel-item">
            <img class="d-block w-100" src="img/fondo-estudiantes3.jpeg" alt="Third slide">
            <div class="carousel-caption">
                <h3>Slide #3</h3>
                <p>Aqui una pequeña descripcion</p>
            </div>
         </div>

         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> 
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
        
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div> 
      </div>
    </div>
    
    <br><br>
  
    <aside>
        
            
      <div style="padding: 0px 0px 0px 200px; margin-right: 100px;">
      <h1 style="font-family:Times New Roman, Times, serif; justify-content:center;" >Calendario de Matricula</h1>
      <img src="img/logo-puma.png" width="100" height="140">
      <p>Consulta Aqui</p>
      <a target="_blank" href="img/calendarioIII2018.png"><img src="img/calendarioIcono.jpg" style="width: 80px; height: 80px;"></a>
    
     
      </div>
      
    </aside>

    <aside>
        <div style="padding: 0px 0px 0px 200px; margin-right: 45px;" >
        <h1 style="font-family:Times New Roman, Times, serif;" >Calendario de Matricula</h1>
        <img src="img/logo-puma.png" width="100" height="140">
        <p>Consulta Aqui</p>
        <a target="_blank" href="img/calendarioIII2018.png"><img src="img/calendarioIcono.jpg" style="width: 80px; height: 80px;"></a>
      
        </div>
      </aside>

    <br><br><br><br>
    
    <?php

      include('php/paginas/footer.php');

    ?>
    
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>