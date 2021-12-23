<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="pares.php" method="get">
        <table>
                <tr>
                    <td>INTRODUCIR UN NÚMERO:</td>
                    <td><input type="number" name="num"></td>
                </tr>
        </table>
        <input type="submit" value="Generar"><br>
    </form>
        
    <?php
        if($_GET){
            $num=$_GET['num'];
            if($num%2==0){
                $bajar = $num/2;        
                $subir= 1;
                for($i=0 ; $i = $bajar ; $i++){        
                    echo $bajar." ";
                    echo $subir." ";            
                    $bajar = ($bajar-1);
                    $subir = ($subir+1);
                }
            } else{
                echo "<br> El número es impar";
            }    
        }
    ?>

</body>
</html>