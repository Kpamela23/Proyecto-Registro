<?php
            $archivo = fopen("../data/Usuarios.json","a+"); //
            fwrite($archivo, json_encode($_POST)."\n");

            fclose($archivo);
            echo json_encode($_POST);

?>

<?php 
public function crearNuevaCarpeta(){
    mkdir(../data/Estudiantes/.$_POST["nombre"]."-".$_POST["apellido"]);
    $archivo=fopen("../data".$POST["nombre"]."-".$POST["apellido"]."/asignaturas-matriculadas.json","a+")
}
?> 
