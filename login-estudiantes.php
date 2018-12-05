<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Estudiantes</title>
        <link rel="icon" href="img/logo-unah.ico">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">                
    </head>

    <body >
          
      <?php
        
        include('php/paginas/header.php');
      
      ?>

            <div style="margin-top:50px; margin-left: 100px; text-align: center;">
                <h3 style="font-family:'Lucida Sans'">Estudiantes</h3>
            </div>


            <div class="container">
                <div id="contenedor-formulario" >
                    <div style="background-image: url(img/form-estudiante.jpeg); width: 450px; height: 300px; padding: 40px;">
                        <p>Ingresa tu numero de cuenta y tu contraseña</p>
                        <form> 
                            <input type="text" name="num-cuenta" id="num-cuenta" placeholder="No. de Cuenta"><br><br>
                            <input type="password" name="password" id="password" placeholder="Contraseña"><br><br>
                            <button type="button" class="btn btn-outline-dark" id="btn-login">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>


           

            <?php

              include('php/paginas/footer.php');

            ?>


            <script src="js/jquery.min.js"></script>

            <script>
              $("#btn-login").click(
                function(){
                  console.log("Usuario: " + $("#num-cuenta").val());
                  console.log("Password: " + $("#password").val());
                }
              );
            </script>


<script src="js/bootstrap.min.js"></script>
</body>
</html>