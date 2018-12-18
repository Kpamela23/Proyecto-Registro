<?php
            $archivo = fopen("../data/Usuarios.json","a+"); //
            fwrite($archivo, json_encode($_POST)."\n");

            fclose($archivo);
            echo json_encode($_POST);

?>