<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
        <title>Login </title>
=======
        <title>Login Estudiantes</title>
>>>>>>> 173af17d580e5fa6847aa78846ac9ad4aefe5f6a
        <link rel="icon" href="img/logo-unah.ico">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">                
    </head>

    <body >
          
      <?php
        
        include('php/paginas/header.php');
        include('php/paginas/navbar.php');
      
      ?>

            <div style="margin-top:50px; margin-left: 100px; text-align: center;">
                <h3 style="font-family:'Lucida Sans'">Iniciar Sesión</h3>
            </div>


            <div class="container">
                <div id="contenedor-formulario" >
                    <div style="background-image: url(img/form-estudiante.jpeg); width: 450px; height: 300px; padding: 40px;">
                        <p>Ingresa tu numero de cuenta y tu contraseña</p>
                        <form> 
                            <input type="text" name="usuario" id="usuario" placeholder="No. de Cuenta"><br><br>
                            <input type="password" name="password" id="password" placeholder="Contraseña"><br><br>
                            <button type="button" class="btn btn-outline-dark" id="btn-login" onclick="registrar()">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>

            <?php
              include('php/paginas/footer.php');
            ?>

            <script type="text/javascript" src="js/jquery.min.js"></script>
            <script>
                $("#btn-login").click(function(){
                    console.log("Usuario: " + $("#usuario").val());
                    console.log("Password: " + $("#password").val());
                    $.ajax({
                        url:"ajax/login.php",
                        data:"usuario="+$("#usuario").val() + "&password="+$("#password").val(),
                        dataType:"json",
                        method:"POST",
                        success:function(respuesta){
                            console.log(respuesta);
                            if (respuesta.estatus == 1){
                                if (respuesta.tipoUsuario=="estudiante")
                                    window.location.href = "menu-principal-estudiantes.php";//redireccionar
                                else if (respuesta.tipoUsuario=="docente")
                                    window.location.href = "menu-principal-docentes.php";//redireccionar
                                else if (respuesta.tipoUsuario=="jefe")
                                    window.location.href = "menu-principal-jefe.php";//redireccionar
                                else if (respuesta.tipoUsuario=="admin")
                                    window.location.href = "menu-principal-administrador.php";//redireccionar
                            }else 
                                alert("Credenciales invalidas");
                        },
                        error:function(error){
                            console.error(error);
                        }
                    });
                });
            </script>


<script src="js/bootstrap.min.js"></script>
<script src="js/validacion.js"></script>
</body>
</html>