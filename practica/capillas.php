<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>

    <style>
        .llenar{
            padding-left: 20px;
        }
        .recibo{
            text-align: center;
            margin-top: 5%;
            margin-bottom: 10%;
            margin-left: 25%;
            margin-right: 25%;
            background-color: rgba(211, 222, 231, 0.534);
            padding: 20px;
            border: black 1px solid;
            box-shadow: 10px 10px 10px grey;
        }
        .tabla1 td{
            padding-left: 10px;
        }
        .formfinal{
            padding: 10px;
            width: 100%;
        }
        .re-h1{
            float: left;
        }

        h2{
            margin: 0px;
            padding: 0px;
        }

        .tabla4{
            text-align: center;
            width: 100%;
        }
        .tabla2{
            text-align: center;
            width: 100%;
        }
        .bol{        
            font-weight: bolder;
        }
        .fecha{
            width: 7em;
            text-align: center;
        }
        .tablafecha{
            border-collapse: collapse;
            border: black 1px solid;
        }
    </style>
</head>

    <body>
        
        <div class="llenar">
            <h1>Formulario de recibo</h1>
            <h2>Llenar los siguientes campos para la generación de su recibo:</h2>

            <form action="capillas.php" method="post">
                <h1>RECIBO</h1>
                <table class="tabla1">
                    <tr>
                        <td>Lugar: </td>
                        <td> <input type="text" name="lugar" value=""></td>
                    </tr>
                    <tr>
                        <td>Día/mes/año: </td>
                        <td> <input class="fecha" type="text" name="dia" value="">
                        <input class="fecha" type="text" name="mes" value="">
                        <input class="fecha" type="text" name="ano" value=""></td>
                    </tr>
                    <tr>
                        <td>Cantidad en Bolivianos (numérico): </td>
                        <td> <input type="text" name="bs"></td>
                    </tr>
                    <tr>
                        <td>Cantidad en Bolivianos (escrito): </td>
                        <td> <input type="text" name="bse"></td>
                    </tr>
                    <tr>
                        <td>Tipo de Cambio: </td>
                        <td> <input type="text" name="cambio"></td>
                    </tr>
                    <tr>
                        <td>Nombre: </td>
                        <td> <input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td>Concepto/razón: </td>
                        <td> <input type="text" name="con"></td>
                    </tr>
                    <tr>
                        <td>CI (emisor y receptor respectivamente): </td>
                        <td> <input class="fecha" type="text" name="ci1">
                        <input class="fecha" type="text" name="ci2"></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Generar">
            </form>
        </div>




        <?php
            
            if($_POST){
                $lugar=$_POST['lugar'];
                $dia=$_POST['dia'];
                $mes=$_POST['mes'];
                $ano=$_POST['ano'];
                $bs=$_POST['bs'];
                $bse=$_POST['bse'];
                $con=$_POST['con'];
                $ci1=$_POST['ci1'];
                $ci2=$_POST['ci2'];
                $cambio=$_POST['cambio'];
                $nombre=$_POST['nombre'];
            
                echo "<div class='recibo'>
        
                <table class='formfinal'>
                    <tr>
                        <td><h1 class='re-h1' class='bol'>RECIBO</h1></td>
                        <td>
                            <table>
                                <tr>
                                    <td class='bol';>Bs</td>
                                    <td>".$bs."</td>
                                </tr>
                                <tr>
                                    <td class='bol'>Sus</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class='bol'>T/C</td>
                                    <td>".$cambio."</td>
                                </tr>
                            </table>
                        </td>
                        <tr>
                            <td>
                                <table class='tablafecha'>
                                    <tr class='bol'>
                                        <td>Lugar</td>
                                        <td>Día</td>
                                        <td>Mes</td>
                                        <td>Año</td>
                                    </tr>
                                    <tr>
                                        <td>".$lugar."</td>
                                        <td>".$dia."</td>
                                        <td>".$mes."</td>
                                        <td>".$ano."</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
    
                    </tr> 
    
                    <tr>
                        <table class='tabla2'>
                            <tr>
                                <td class='bol'>Recibí de: </td>
                                <td>".$nombre."</td>
                            </tr>
                            <tr>
                                <td class='bol'>La suma de: </td>
                                <td>".$bse."</td>
                            </tr>
                            <tr>
                                <td>00/100</td>
                                <td>Bolivianos/Dólares</td>
                            </tr>
                            <tr>
                                <td class='bol'>Por concepto de: </td>
                                <td>".$con."</td>
                            </tr>
                        </table>
                    </tr>
                    
                    <tr>
                        <td class='bol'>A cuenta: </td>
                        <td>-</td>
                        <td class='bol'>Saldo: </td>
                        <td>-</td>
                        <td class='bol'>Total: </td>
                        <td>".$bs."</td>
                    </tr>
    
                    <tr>
                        <div class='tabla4'>
                            <table class='tabla4'>
                                <tr>
                                    <td><br><br></td>
                                    <td><br><br></td>
                                </tr>
                                <tr>
                                    <td class='bol'>Entregue conforme</td>
                                    <td class='bol'>Recibí conforme</td>
                                </tr>
                                
                            </table>
                        </div>
                    </tr>
    
                            <tr style='padding: 15px;'>
                                <td class='bol'>CI: </td>
                                <td>".$ci1."</td>
                                <td class='bol'>CI: </td>
                                <td>".$ci2."</td>
                            </tr>
                        </table>
    
                    </tr> 
                </table>
            </div>";        
                
            }
        
        ?>

    </body>
</html>
