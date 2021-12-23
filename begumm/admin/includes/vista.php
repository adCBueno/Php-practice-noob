<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>BeGumm</title>

</head>

<div class="container">
<br><br>
<h2 style="text-align: center;">Reporte de lentes</h2>
<table class="table">
  <tr class="table-light">
    <td>Nombre</td>
    <td>Precio</td>
    <td>Descripci&oacute;n</td>
  </tr>
  <?php
    include "conex.php";
    $sql="select * from lentes";
    $consulta=mysqli_query($conexion,$sql);
    mysqli_close($conexion);
    while ($row=mysqli_fetch_array($consulta)) { ?>
      <tr>
        <td><?php echo $row['nombre'];?></td>
        <td><?php echo $row['precio'];?> Bs.</td>
        <td><?php echo $row['descripcion'];?></td>
      </tr>

  <?php
    }
   ?>
</table>

</div>

</html>