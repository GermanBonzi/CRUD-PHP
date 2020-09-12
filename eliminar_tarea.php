<?php 

    include('db.php');
     
    if(isset($_GET['id'])){
        $id = $_GET['id'];
 
        $query = "DELETE FROM tareas WHERE id = $id";
        $resultado = mysqli_query($conn, $query);
        echo $resultado;

        $_SESSION['message']='tarea eliminada';
        $_SESSION['message_type'] = 'danger';
        header("location: index.php");
    }




?>