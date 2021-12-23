<html lang="es">

<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
    include 'includes/header.php';
    ?>

<div class="container">
<br><br>
<h2>Lentes</h2>
<a class="btn btn-success pull-right" href="insertar.php">Insertar lentes</a>
<a class="btn btn-info pull-right" href="includes/reporte.php">Imprimir</a><br><br>
<table class="table">
  <tr>
    <td>Nombre</td>
    <td>Precio</td>
    <td>Descripci&oacute;n</td>
    <td>Acciones</td>
  </tr>
  <?php
    include "includes/conex.php";
    $sql="select * from lentes";
    $consulta=mysqli_query($conexion,$sql);
    mysqli_close($conexion);
    while ($row=mysqli_fetch_array($consulta)) { ?>
      <tr>
        <td><?php echo $row['nombre'];?></td>
        <td><?php echo $row['precio'];?></td>
        <td><?php echo $row['descripcion'];?></td>
        <td>
          <a class="btn btn-info" style="margin:5px;" href="imagen.php?id=<?php echo $row['id'];?>">Imagen</a>
          <a class="btn btn-primary" style="margin:5px;" href="ver.php?id=<?php echo $row['id'];?>">Ver</a>
          <a class="btn btn-warning" style="margin:5px;" href="editar.php?id=<?php echo $row['id'];?>">Editar</a>
          <a class="btn btn-danger" style="margin:5px;" href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
        </td>
      </tr>

  <?php
    }
   ?>


</table>
</div>


<?php
    include 'includes/footer.php';
  }
  else{
    header("location: login.php");
  }
 ?>

</html>