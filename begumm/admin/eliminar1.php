<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
  include 'includes/header.php';
  include "includes/conex.php";


    
echo "<div class='container'><br>
<div>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title'>Modal title</h5>
    <form action='eliminar.php' method='post'>
       </div>
    <div class='modal-body'>
      <p>Usted está por eliminar el registro ¿está seguro?.</p>
    </div>
    <div class='modal-footer'>
    <input class='btn btn-outline-dark' type='submit' name='no' value='Cancelar'>
    <input class='btn btn-outline-danger' type='submit' name='si' value='Eliminar'>
    </form>
    </div>
  </div>
</div>
</div>";

        if($_POST){
            $si=$_POST['si'];
            $id=$_GET['id'];
            if($si){
                
                $sql="delete from lentes where id=$id";
                $consulta=mysqli_query($conexion,$sql);
                mysqli_close($conexion);
                if ($consulta) {
                echo "<div class='alert alert-success'>";
                echo "Sus datos fueron eliminados correctamente.";
                echo "<div>";
                }
                else{
                echo "<div class='alert alert-danger'>";
                echo "Error, vuelva a intentar.";
                echo "<div>";
                }
          
                echo "<a class='btn btn-info' href='lentes.php'>Volver</a>";      
            }
   
   
                else{
                header("location: lentes.php");
                }
        }

?>
  

    <?php
        include 'includes/footer.php';
      }
      else{
        header("location: login.php");
      }
     ?>