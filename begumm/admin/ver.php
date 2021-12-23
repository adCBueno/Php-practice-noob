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

<div class="container">
<br>
<h2><?php echo $row['nombre'];?></h2>
<img src="../img/<?php echo $id;?>.jpg" alt=""><br>
  <div class="form-group col-xs-6">
    <b>Nombre:</b> <?php echo $row['nombre'];?><br>
    <b>Precio:</b> <?php echo $row['precio'];?><br>
    <b>Descripci&oacute;n:</b>  <?php echo $row['descripcion'];?><br>
  </div>

</form>

</div>

<?php } ?>

<div class="container"><br>
    <a class="btn btn-info" href="lentes.php">Volver</a>
</div>

  <?php
        include 'includes/footer.php';
      }
      else{
        header("location: login.php");
      }
     ?>