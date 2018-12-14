<?php
//procesa para los departamentos
    $archivo = fopen("carreras/ciencias/fisica.json","r");
    while(($linea = fgets($archivo))){
        $registros[] = json_decode($linea, true);
    }   
    fclose($archivo);
?>
