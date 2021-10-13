<?php
    if (isset($_FILES['foto']['name'])) {
        $tipoArchivo = $_FILES['foto']['type'];
        $permitido=array("image/png","image/jpeg");
        if( in_array($tipoArchivo,$permitido) ==false ){
            die("Archivo no permitido");
            }
        $nombreArchivo = $_FILES['foto']['name'];
        $tamanoArchivo = $_FILES['foto']['size'];
        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
        //include_once "db_empresa.php";
        
        //CONECTO LA BASE DE DATOS Y SUBO LOS DATOS
        include "conexion.php";
        $binariosImagen = mysqli_escape_string($conexion, $binariosImagen);
        
        $query = "INSERT INTO obras (descripcion,imagen,tipo) values ('" . $_POST['descripcion'] . "','" . $binariosImagen . "','" . $tipoArchivo . "');";
                $res = mysqli_query($conexion, $query);
                
                header("Location:../adminJefer.php");
        }
        
    
?>