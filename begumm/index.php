<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>BeGumm</title>

    <style>
        .caro{
            width: 80%;
        }
        .carousel-inner{
            text-align: center;
        }        
    </style>

</head>
<body>
 
<?php
 include 'admin/includes/header.php';
?>

    <div>
        <img class="banner" src="img/banner.jpg" alt="">
    </div>

    <div class="container">
        <h1 class="title">BeGumm</h1>
        <h5 style="text-align: center;">BeGumm es una empresa que aprovecha los residuos de goma de mascar y les da una nueva vida, convirtiéndolos en monturas modernas de lentes.</h5>
    <br>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="caro" src="img/chicle2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img class="caro" src="img/chicle3.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img class="caro" src="img/chicle4.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

<br><br>

    <h1 class="subtitle" style="text-align: center; color:#2db6bf;">Nuestros productos</h1><br><br>
    
    <div class="container">
        <!-- lo que se repite -->        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                    include "admin/includes/conex.php";
                    $sql="select * from lentes";
                    $consulta=mysqli_query($conexion,$sql);
                    mysqli_close($conexion);
                    while ($row=mysqli_fetch_array($consulta)) { 
            ?>
            <div class="col-md-4">
        
                <div class="card">
                    
                    <img  class="card-img-top" src="admin/img/<?php echo $row['id'];?>.jpg"  alt="...">
                    <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                            <p><?php echo $row['precio']; ?> Bs.</p>
                                <p class="card-text">
                                <?php echo $row['descripcion']; ?>
                                </p>
                            <a href="#" class="btn btn-primary">Ver más</a>                        
                    </div>
                </div>   
            </div>
            <?php } ?>
            <!-- lo que se repite -->
        </div>   
    </div> </div>

<div">
<?php
 include 'admin/includes/footer.php';
    ?>
</div>

</body>
</html>
