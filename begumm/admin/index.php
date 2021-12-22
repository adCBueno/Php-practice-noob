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
    


    <style>

    .footer{
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
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">BeGumm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
                </ul>
                <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </div>
        </nav>

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

 

    <br><br><br><br><br><br>
    
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

</body>
</html>