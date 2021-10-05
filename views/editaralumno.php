
<?php
/*include_once './model/alumnos.php';
$_idalumno = 6;
            $mysqli = conectadb::dbmysql();
            $stmt = $mysqli->prepare('SELECT * FROM alumnos WHERE id = ?');
            $stmt->bind_param('i', $_idalumno);
            $stmt->execute();
            $resultado = $stmt->get_result();
            while ($fila = $resultado->fetch_array()){
                echo $fila['id'];
                echo $fila['alumno'];
                echo $fila['nombre'];
                echo $fila['sexo'];
        }
        */
?>


<form action="./controller/update.php" method="POST">
                    
    <input type="hidden" name="id" value="<?php echo $sqlAlumnos['id']  ?>">
    <input type="text" class="form-control mb-3" name="alumno" placeholder="alumno" value="<?php echo $sqlAlumnos['alumno']  ?>">
    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $sqlAlumnos['nombre']  ?>">
    <input type="text" class="form-control mb-3" name="sexo" placeholder="sexo" value="<?php echo $sqlAlumnos['sexo']  ?>">
                                
    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
</form>