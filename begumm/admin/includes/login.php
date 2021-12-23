<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  <title>BeGumm</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">

    <style>
        .footer {
            margin: 0;
            position: relative;
            width: 100%;
            background: var(--celeste);
            min-height: 100px;
            display: flex;
            flex-direction: column;
            bottom: -25px;
            background-color:  #04c4dc;
        }

        .footer p {
            color: #fff;
            margin: 15px 0 10px 0;
            font-size: 1rem;
            font-weight: 300;
        }

        .wave {
            position: absolute;
            top: -100px;
            left: 0;
            width: 100%;
            height: 100px;
            background: url("https://2021.igem.org/wiki/images/2/23/T--Bolivia--footerWave.png");
            background-size: 1000px 100px;
        }
        
        .wave#wave1 {
            z-index: 1000;
            opacity: 1;
            bottom: 0;
            animation: animateWaves 4s linear infinite;
        }
        
        .wave#wave2 {
            z-index: 999;
            opacity: 0.5;
            bottom: 10px;
            animation: animate 4s linear infinite !important;
        }
        
        .wave#wave3 {
            z-index: 1000;
            opacity: 0.2;
            bottom: 15px;
            animation: animateWaves 3s linear infinite;
        }
        
        .wave#wave4 {
            z-index: 999;
            opacity: 0.7;
            bottom: 20px;
            animation: animate 3s linear infinite;
        }
        
        @keyframes animateWaves {
            0% {
            background-position-x: 1000px;
            }
            100% {
            background-positon-x: 0px;
            }
        }
        
        @keyframes animate {
            0% {
            background-position-x: -1000px;
            }
            100% {
            background-positon-x: 0px;
            }
        }
        
    </style>

</head>
<body>
  <section class="main-container">
    <div class="row">
      <?php
        include "conex.php";
        session_start();
        $salto="c0ebb28701288bcd491128cee9c693191f5bcb";
        $nick=$_POST['nick'];
        $password=$_POST['password'];
        $sql_pass="SELECT * from usuarios WHERE nick='admin'";
        $consulta_pass=mysqli_query($conexion,$sql_pass);
        if ($consulta_pass) {
          while ($row=mysqli_fetch_array($consulta_pass)) {
            $hash=$row['password'];
            /*$_SESSION["id"] =$row['id'];
            $_SESSION["nombres"] =$row['nombres'];
            $_SESSION["apellidos"] =$row['apellidos'];
            $_SESSION["rol"] =$row['rol'];*/
          }
          if (password_verify($salto.$password,$hash)) {
            $sql_pass2="SELECT * from usuarios WHERE nick='admin'";
            $consulta_pass2=mysqli_query($conexion,$sql_pass);
            while ($row2=mysqli_fetch_array($consulta_pass2)) {
              $_SESSION["id"] =$row2['id'];
              $_SESSION["nombres"] =$row2['nombres'];
              $_SESSION["apellidos"] =$row2['apellidos'];
              $_SESSION["rol"] =$row2['rol'];
            }
            if ($_SESSION['rol']=='admin') {
              header("location: ../index.php");
            }else {
              header("location: ../noadmin.php");
            }
          }else {
         
          echo "
          <div class='alert alert-danger'> 
              <div class='position-absolute top-0 start-50 translate-middle alert alert-danger' style='margin-top: 20%; text-align: center; padding-left: 10%; padding-right: 10%;'> 
                <div id='formContent' class='card shadow-lg p-3 mb-5 bg-body rounded' style='width: 25rem;'>
                    <!-- Tabs Titles -->
                    <!-- Icon -->
                    <h2 class='card-title' style='text-align: center; margin-top: 15px; padding-right: 25px; padding-left: 25px; color: grey;'>Login</h2>
                    <!-- Login Form -->
                  <div class='cardbody'>
                    <form>
                      Datos erroreos <br><br>
                      <a class='btn btn-info' href='../login.php'> Volver al login</a>
                    </form>
                  </div>
                
                </div>
              </div>
          </div>";
          }
        }
        else {
          echo "<br/>Datos erroneos<br/>";
          echo "<a href='../login.php'> Volver al login</a>";
          }
   ?>
    </div>
  </section>
 <!--footer-->
 <div class="position-absolute bottom-0" style="width: 100%;"> 

 <footer class="footer">
      
      <div class="waves">
          <div class="wave" id="wave1"></div>
          <div class="wave" id="wave2"></div>
          <div class="wave" id="wave3"></div>
          <div class="wave" id="wave4"></div>
      </div>
      <div style="text-align: center;"><br>
          <p>@Todos los derechos reservados.</p>
      </div>
  </footer>

 </div>

    

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>