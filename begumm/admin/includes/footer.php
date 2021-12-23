<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Document</title>

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
        .caro{
            width: 80%;
        }
        .carousel-inner{
            text-align: center;
        }
    </style>

</head>
<body>
    

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