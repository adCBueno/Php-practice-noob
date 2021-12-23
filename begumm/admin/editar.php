<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
    include 'includes/header.php';
    include 'includes/conex.php';
    $id=$_GET['id'];
    $sql="select * from lentes where id=$id";
    $consulta=mysqli_query($conexion, $sql);
    while ($row=mysqli_fetch_array($consulta)) {
?>

<div class="container"><br><br>
<h2>Editar lente</h2>
<form class="" action="procesar.php" method="post">
  <div class="form-group col-xs-6">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
    Nombre: <input class="form-control" type="text" name="nombre" value="<?php echo $row['nombre'];?>">
    Precio: <input class="form-control" type="text" name="precio" value="<?php echo $row['precio'];?>">
    Descripci&oacute;n<input type="text" class="form-control" name="descripcion" value="<?php echo $row['descripcion'];?>">
    <input class="btn btn-secondary" type="submit" name="" value="Enviar" style="margin-top:15px; margin-right:15px;"> 
    <?php } ?>
<a class="btn btn-info" href="lentes.php" style="margin-top:15px; margin-right:15px;">Volver</a>
 


</div>

</form>
</div>




    <?php
        include 'includes/footer.php';
      }
      else{
        header("location: login.php");
      }
     ?>