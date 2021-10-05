<table class="table table-dark table-striped">
<tr>
<th>Alumno</th>
<th>Nombre</th>
<th>Sexo</th>
<th></th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
<?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>
<?php
foreach ($sqlAlumnos as $alumnoview) { ?>

<tr>
<td><?php echo $alumnoview->alumno; ?></td>
<td><?php echo $alumnoview->nombre; ?></td>
<td><?php echo $alumnoview->sexo; ?></td>
<td>
<?php if ($alumnoview->sexo == 'M') { ?>
<i class = "material-icons prefix blue-text">male</i>
<?php } else { ?>
<i class = "material-icons prefix red-text">female</i>
<?php } ?>
</td>
<td>
   <button  type="submit" name="action">
     <a href="?menu=deletealumno&idalumno=<?php echo $alumnoview->id; ?>">
     <i class="material-icons right white-text">delete</i></a>
      </button>                    
      <button type="submit" name="action">
      <a href="?menu=editalumno&idalumno=<?php echo $alumnoview->id; ?>">
   <i class="material-icons right white-text">edit</i></a>
   </button>                    
        </td>
</tr>
<?php } ?>
</tbody>
</table>
<?php
}else {?>
<h3>No tiene permisos para entrar a la página <h3>
<?php	} ?>