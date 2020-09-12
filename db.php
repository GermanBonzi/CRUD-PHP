<?php
session_start();
// creando conexion a la base de datos myslql con el objeto mysqli_connect
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'db_tareas_php'
);



// comprueba si existe la conexion
/*if (isset($conn)){
    echo "base de datos conectada";
}*/

?>