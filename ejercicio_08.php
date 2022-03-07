<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 8</h2>
        <h3>Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar
en una tabla (<table> en HTML).</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero' min=0/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    <?php
    $Numero = $_REQUEST["numero"];
        ?>
         <table border="2px" style="text-align:center">
            <tr>
                <th colspan="5">Tabla de multiplicar del  "<?php echo $Numero ?>"</th>
            </tr>
            
            <tr>
        <?php
    for ($i=0; $i < 11 ; $i++) { 
        $Resultado = $Numero*$i;
        ?>
                <td ><?php echo "$Numero" ?></td>
                <td>x</td>
                <td><?php echo $i ?></td>
                <td>=</td>
                <td><?php echo $Resultado ?></td>
                
                </tr>    
        <?php
    }
    ?>
    
        </table>