<?php
  session_start();
  $usuario=$_SESSION['id'];
  $rol=$_SESSION['rol'];
  if (isset($usuario)&&$rol=='admin') {
    include 'includes/header.php';
    ?>

   <div class="container"><br><br>
        <h2>Insertar lentes</h2>
            <form class="" action="proceso.php" method="post">
                <div class="form-group col-xs-6">
                    Nombre: <input class="form-control" type="text" name="nombre" value="">
                    Precio: <input class="form-control" type="text" name="precio" value="">
                    Descripci&oacute;n<input type="text" class="form-control" name="descripcion" value="">
                    <br>
                    <input class="btn btn-secondary" type="submit" name="" value="Enviar" style="margin:5px;">
                
                <a class="btn btn-info" href="lentes.php">Volver</a>
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