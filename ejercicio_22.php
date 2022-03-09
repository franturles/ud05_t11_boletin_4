<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 22</h2>
        <h3>Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos.</h3>
    </head>
    <body>

</html>
<?php
for ($numero = 2; $numero <= 100; $numero++) {   
    $Primo=TRUE;
    for ($i = 2; $i < $numero; $i++) {   
        if (($numero % $i) == 0) {
            $Primo = FALSE;
            break;
        }
    }
if($Primo){
    echo "<br>$i";
}
}
?>