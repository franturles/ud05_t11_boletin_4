<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 11</h2>
        <h3>Escribe un programa que muestre en tres columnas, el cuadrado y el cubo de los 5 primeros números
enteros a partir de uno que se introduce por teclado.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero'/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    </body>
    <?php
    $Numero=$_REQUEST["numero"];
    echo "<table border='1px'>
    <tr>
        <th>Cuadrado</th>
        <th>Cubo</th>
        <th>Numero</th>
    </tr>";
        
    for ($i=$Numero; $i < ($Numero+5); $i++) {
        $Cuadrado = ($i*$i);
        $Cubo = ($i*$i*$i);
        echo "<tr>
        <td>$i</td>
        <td>$Cuadrado</td>
        <td>$Cubo</td>";
    }
    echo "
    </tr>
    </table>";
    print_r($Numeros);
    ?>
</html>