<?php
            $archivo = fopen("../data/Secciones.json","a+"); //
            fwrite($archivo, json_encode($_POST)."\n");

            fclose($archivo);
            echo json_encode($_POST);

?>