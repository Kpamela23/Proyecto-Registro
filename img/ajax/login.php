<?php
    session_start();
    $archivo = fopen("../data/Usuarios.json","r");
    while(($linea=fgets($archivo))){
        $registro = json_decode($linea,true);
        if (
            $_POST["usuario"]==$registro["usuario"] && 
            sha1($_POST["password"])==sha1($registro["password"])
        ){
            $registro["estatus"] = "1";
            $registro["mensaje"] = "Acceso autorizado";
            $_SESSION["usuario"] = $_POST["usuario"];
            $_SESSION["tipoUsuario"] = $registro["tipoUsuario"];
            $_SESSION["nombre"] = $registro["nombre"];
            $_SESSION["carrera"] = $registro["carrera"];
            $_SESSION["centro"] = $registro["centro"];

            echo json_encode($registro);
            exit;
        }
    }
    
    $registro = array();
    $registro["estatus"] = "0"; 
    $registro["mensaje"] = "Acceso no autorizado";
    echo json_encode($registro);
?>