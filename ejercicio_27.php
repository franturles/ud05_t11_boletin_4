<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 27</h2>
        <h3>Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1 y un número
leído por teclado.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero' min=0/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    <?php
    $Multiplos = array();
    $Numero = $_REQUEST["numero"];
    for ($i=1; $i <= $Numero; $i++) { 
        if ($i % 3 == 0) {
            array_push($Multiplos,$i);
        }
    }
    foreach ($Multiplos as $Multiplo) {
        echo "</br>$Multiplo";
    }
    
    
    
    ?>