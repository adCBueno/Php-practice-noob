<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
  include 'includes/header.php';
  include "includes/conex.php";
  $id=$_POST['id'];
  $nombre=$_POST['nombre'];
  $precio=$_POST['precio'];
  $descripcion=$_POST['descripcion'];
  $usuario_modificador=$_SESSION['id'];
  $modificado=date('Y-m-d H:i:s');
  $sql="update lentes set nombre='$nombre',precio='$precio',descripcion='$descripcion',usuario_modificador='$usuario_modificador',modificado='$modificado' where id=$id";
  $consulta=mysqli_query($conexion,$sql);
  mysqli_close($conexion);
  if ($consulta) {
    echo "<div><br><div class='container alert alert-success'>";
    echo "Sus datos fueron actualizados correctamente.";
   
  }
  else{
    echo "<div class='alert alert-danger'>Error, vuelva a intentar.</div>";
  }
  echo "<br><a class='btn btn-info' href='lentes.php'>Volver</a></div></div>";
    ?>
    


    <?php
        include 'includes/footer.php';
      }
      else{
        header("location: login.php");
      }
     ?>