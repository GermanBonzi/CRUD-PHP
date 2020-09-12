<?php include("db.php");?>
<?php include("includes/header.php")?>


<div class="container p-4">
    <div class="row">

        <div class="col-md-4">

        <!-- validacion con php, compruebo que existe el msj con php y desp
        llamo al session con el mensaje que le almacene en el guardar_tarea.php !-->
            <?php 
                if(isset($_SESSION['message'])){   ?>

                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>       

            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="guardar_tarea.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="titulo" class="form-control" placeholder="titulo de la tarea" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="descripcion de la tarea"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar_tarea" value="guardar tarea">
                </form>
            </div>
        </div>


        <div class="col-md-8">
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Titulo </th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>Editar/Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM tareas ";
                            $resultado = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_array($resultado)) { ?>
                                
                                <tr>
                                    <td> <?php echo $row['titulo'] ?></td>
                                    <td> <?php echo $row['descripcion'] ?></td>
                                    <td> <?php echo $row['fecha'] ?></td>
                                    <td> 
                                        <a class="btn btn-secondary" href="editar_tarea.php?id=<?php echo $row['id']?>">
                                            <i class="fas fa-marker"></i>
                                        </a>
                                        <a class="btn btn-danger" href="eliminar_tarea.php?id=<?php echo $row['id']?>">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>

                            <?php  } ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>




    


