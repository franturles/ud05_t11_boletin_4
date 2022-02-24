<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 13</h2>
        <h3>Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos
            son negativos.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero'/></p>
        <p><input type='submit' value='Submit'/></p>
    <?php
    $valores=array();
    $Numero=$_REQUEST["numero"];
    while(count($valores) <= 10){
    array_push($valores,$_REQUEST["numero"]);
    }
    print_r($valores);
    for($i=0;$i < 10; $i++){
    }
    ?>
    </body>
</html>