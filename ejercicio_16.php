<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 16</h2>
        <h3>Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
primo es aquel que sólo es divisible entre él mismo y la unidad</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Base: <input type='number' name='numero' min='0'/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
</html>
<?php
$count = 0;
$numero = $_REQUEST["numero"];
for ($i = 2; $i <= $numero; $i++) {   
        if (($numero % $i) == 0) {
            $count++;
        if($count>1){
            $Resultado = "No es primo";
        }
        }else {
            $Resultado = "Es primo";
        }
    }
    echo $Resultado;
?>