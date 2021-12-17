<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="multi.php" method="post">
        <table>
                <tr>
                    <td>Ingrese el número 1:</td>
                    <td><input type="number" name="num1"></td>
                </tr>
                <tr>
                    <td>Ingrese el número 2:</td>
                    <td><input type="number" name="num2"></td>
                </tr>
        </table>
        <input type="submit" value="Generar">
    </form>
        
    <?php
        if($_POST){
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            
            
            $a = $num1;
            $aux = 0;
                for ($i=1; $i <= $a; $i++){
                    $resultado=$num2+$aux;
                    $aux=$resultado;          
                    echo "<h4>Se suma ".$num2." más el anterior y el resultado es: ".$resultado."</h4>";          
                }
                echo "<h3>La multiplicación es: ".$num1." x ".$num2." = ".$resultado."</h3>";
        }    
    ?>

</body>
</html>
