<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="contenido.php" method="post">
        <table>
                <tr>
                    <td>Colores disponibles:</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1. Rojo</td>                    
                </tr>
                <tr>
                    <td></td>
                    <td>2. Verde</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3. Azul</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>INTRODUCIR EL NÚMERO DE LA OPCIÓN QUE DESEE:</td><br>
                    <td><input type="number" name="num"></td>
                </tr>
        </table>
        <input type="submit" value="Generar"><br><br>
    </form>
        
    <?php
        if($_POST){
            $num=$_POST['num'];
            
            switch($num){
                case 1:
                    echo "<div style='background-color: #ff0000; color: white;'>
                    HTML, siglas en inglés de HyperText Markup Language (‘lenguaje de marcado de hipertexto’), hace referencia al lenguaje de marcado para la elaboración de páginas web.
                    </div>";
                    break;
                case 2:
                    echo "<div style='background-color: green; color: white;''>
                    HTML, siglas en inglés de HyperText Markup Language (‘lenguaje de marcado de hipertexto’), hace referencia al lenguaje de marcado para la elaboración de páginas web.
                    </div>";
                    break;
                case 3:
                    echo "<div style='background-color: blue; color: white;''>
                    HTML, siglas en inglés de HyperText Markup Language (‘lenguaje de marcado de hipertexto’), hace referencia al lenguaje de marcado para la elaboración de páginas web.
                    </div>";
                    break;
                default: 
                echo "<p style='text-align: center;'>No ha elegido un color válido</p>";
                    break;
            }
            
        }
    ?>

</body>
</html>