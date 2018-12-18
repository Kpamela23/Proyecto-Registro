<?php
$archivo = fopen("../data/usuarios.json","r");
            $registro=array();
            while(($linea=fgets($archivo))){
                $registro = json_decode($linea,true);
                if ($registro["usuario"] == $_POST["usuario"]){
                    break;//Se encontro el registro
                }
            }
            
            $respuesta["usuario"]=  [
                                        "usuario"=>$_POST["usuario"],
                                        "nombre"=>$registro["nombre"],
                                        "urlImagen"=>$registro["urlImagen"]
                                    ];
            $respuesta["tweet"] = $_POST["tweet"];
            $respuesta["hashtags"] = $_POST["hashtags"];
            fclose($archivo);

            $archivo = fopen("../data/tweets.json","a+"); //Anexar un nuevo tweet
            fwrite($archivo, json_encode($respuesta)."\n");
            fclose($archivo);
            echo json_encode($respuesta);

            
 ?>