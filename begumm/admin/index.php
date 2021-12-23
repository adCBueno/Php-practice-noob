<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>PaladArt</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

</head>
<body>
    

    <!-- Agrupar los enlaces de navegación, los formularios y cualquier
        otro elemento que se pueda ocultar al minimizar la barra -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="platos.php">Platos</a></li>
        <li><a href="includes/logout.php">Salir</a></li>
        </ul>
        </div>
    </div>

 

    <?php
  session_start();
  $usuario=$_SESSION["nombres"].' '.$_SESSION["apellidos"];
  $rol=$_SESSION["rol"];
  if (isset($usuario)&&$rol=='admin') {
    include 'includes/header.php';
    echo "Bienvenid@ ".$usuario.'<br> Usted inicio la sesion con rol: '.$rol;
    include 'includes/footer.php';
  }
  else{
    header("location: login.php");
  }

 ?>


</body>
</html>