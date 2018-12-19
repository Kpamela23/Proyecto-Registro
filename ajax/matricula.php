<?php
            $archivo = fopen("../data/estudiantes/".$_POST["usuario"]."/asignaturas-matriculadas.json","a+"); //
            fwrite($archivo, json_encode($_POST)."\n");
            fclose($archivo);
?>