<?php
    
    if($_POST["opcion"] == "1" || $_POST["opcion"] == "2"){
        $archivo = fopen("../data/credenciales.json","a+");
        fwrite($archivo, json_encode($_POST)."\n");
        fclose($archivo);
    } 

    switch($_POST["opcion"]){
        case "1":
            $archivo = fopen("../data/estudiantes/Usuarios.json","a+"); //
            fwrite($archivo, json_encode($_POST)."\n");
            fclose($archivo);
            echo json_encode($_POST);
            crearNuevaCarpeta("estudiantes");
            break;
        case "2":
            $archivo = fopen("../data/docentes/Usuarios.json","a+"); //
            fwrite($archivo, json_encode($_POST)."\n");
            fclose($archivo);
            echo json_encode($_POST);
            crearNuevaCarpeta("docentes");
            break;
        case "3":
            $archivo = fopen("../data/secciones/secciones.json","a+"); //
            fwrite($archivo, json_encode($_POST)."\n");
            fclose($archivo);
            echo json_encode($_POST);
            break;
        default:
            return;
    }           

    function crearNuevaCarpeta($tipoUsuario){
        mkdir("../data/".$tipoUsuario."/".$_POST["usuario"]);
        switch($_POST['opcion']){
            case "1":
                $archivo=fopen("../data/".$tipoUsuario."/".$_POST["usuario"]."/asignaturas-matriculadas.json","a+");
                fclose($archivo);
                $archivo2=fopen("../data/".$tipoUsuario."/".$_POST["usuario"]."/historial.json","a+");
                fclose($archivo2);
                break;
            case "2":
                $archivo=fopen("../data/".$tipoUsuario."/".$_POST["usuario"]."/secciones-asignadas.json","a+");
                fclose($archivo);
                //$archivo2=fopen("../data/".$tipoUsuario."/".$_POST["usuario"]."/subir-notas.json","a+");
                //fclose($archivo2);
                break;
            default:
                return;
        }
    }
?>

