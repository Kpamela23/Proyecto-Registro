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
  
        include('php/header.php');
        include('php/navbar.php');
       

      
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
    
    <br>
    <br>
    <br><br>
    <br><br>
  

    <div class="container">
                <div class="card-group">
                        <div class="card">
                              <img class="card-img-top " src="img/vision.png" alt="Card image cap" >
                          <div class="card-body">
                            <p class="card-text" style="font-family: Candara; color: black;" align="justify"> 
                            Una institución líder de la educación superior nacional e internacional; 
                            protagonista en la transformación de la sociedad hondureña hacia el desarrollo humano sostenible con recursos 
                            humanos del más alto nivel académico, científico y ético.
                            <br>
                            Una institución con un gobierno democrático, organizada en redes y descentralizada, 
                            transparente en la rendición de cuentas, con una gestión académica y administrativo/ financiera, 
                            participativa, estratégica, moderna y orientada hacia la calidad y la pertinencia de la educación, 
                            la investigación y su vinculación con la sociedad hondureña y mundial, procesos basados en los nuevos paradigmas 
                            de la ciencia y la educación.                          
                            </p>
                          </div>
                        </div> 
                        &nbsp; &nbsp; &nbsp; &nbsp; <br><br><br>
                        <div class="card">
                                <img class="card-img-top" src="img/mision.png" alt="Card image cap">
                          <div class="card-body">
                            
                            <p class="card-text" style="font-family: Candara; color: black;" align="justify">
                            Somos una universidad estatal y autónoma; responsable constitucionalmente de organizar, dirigir y desarrollar 
                            el tercer y cuarto nivel del sistema educativo nacional. Nuestro ámbito de producción y acción científica es universal. 
                            Nuestro compromiso es contribuir a través de la formación de profesionales, la investigación y la vinculación universidad-sociedad 
                            al desarrollo humano sostenible del país y por medio de la ciencia y la cultura que generamos, contribuir a que toda Honduras
                            participe de la universalidad y a que se desarrolle en condiciones de equidad y humanismo, atendiendo la pertinencia académica para 
                            las diversas necesidades regionales y el ámbito nacional.
                            </p>
                          </div>
                        </div>
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