<?php

    $archivo = fopen("../data/secciones/secciones.json","r");
    $respuesta = array();

    while(($linea = fgets($archivo))){
        $registro = json_decode($linea,true);
        if ($registro['codigoAsignatura'] == $_POST['asignatura'])
            $respuesta[] = $registro;
    }    
    fclose($archivo);
    echo json_encode($respuesta);

?>