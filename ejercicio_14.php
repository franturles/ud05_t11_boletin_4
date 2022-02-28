<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 14</h2>
        <h3>Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Base: <input type='number' name='base' min='0'/></p>
        <p>Exponente: <input type='number' name='exponente' min='0'/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    <?php
    $Base = $_REQUEST["base"];
    $Exponente = $_REQUEST["exponente"];
    $Resultado= pow($Base,$Exponente);
    echo $Resultado;
    
    
    
    ?>