<?php 

include("db.php");
    // validacion del formulario

    if(isset($_POST['guardar_tarea'])){
        // Obteniendo los valores del formulario
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];

        $query = "INSERT INTO tareas(titulo, descripcion) VALUES
         ('$titulo','$descripcion')";

        $resultado = mysqli_query($conn , $query);

        // comprobar si no existe un resultado de la consulta
        if (!$resultado) {
            die("Fallo la consulta");
        }
        

        // almaceno dentro de session un msj
        $_SESSION['message']= 'tarea guardada';
        // success pinta de verde el mensaje tarea guardada
        $_SESSION['message_type'] = 'success';

        // una vez guardado el dato en la bd, redirecciono al index.php
        header("location: index.php");



    }


?>