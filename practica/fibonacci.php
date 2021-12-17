<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="fibonacci.php" method="post">
        <table>
                <tr>
                    <td>Ingrese el número que desee:</td>
                    <td><input type="number" name="number"></td>
                </tr>
                
        </table>
        <input type="submit" value="Generar">
    </form>

    <?php  

if($_POST){
    $number=$_POST['number'];
    function Fibonacci($number){
              
        if ($number == 0)
            return 0;    
        else if ($number == 1)
            return 1;    
                
        else
            return (Fibonacci($number-1) + Fibonacci($number-2));
    }
    
    echo "<br>La serie es la siguiente: ";

    for ($i = 0; $i < $number; $i++){  
        echo Fibonacci($i)," ";
    }
}


?>

</body>
</html>
