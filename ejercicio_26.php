<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 26</h2>
        <h3>Realiza un programa que pida primero un número y a continuación un dígito. El programa nos debe
dar la posición (o posiciones) contando de izquierda a derecha que ocupa ese dígito en el número
introducido.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero' min=0/></p>
        <p>Digito: <input type='number' name='digito' min=0/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    <?php
    $Contar = 0;
    $m = 0;
    $Pos = array();
    $Digito=$_REQUEST["digito"];
    $Numeros=str_split($_REQUEST["numero"]);
    foreach ($Numeros as $Numero ) {
    $Contar++;
        if ($Numero == $Digito) {
           array_push($Pos,$Contar); 
        }
    }
    echo "El digito $Digito se encuentra en las posiciones:";
    for ($i=0; $i < count($Pos); $i++) { 
        echo "<br>$Pos[$i]";
    }
    #for ($i=0; $i < strlen($Numero) ; $i++) { 
        # code...
    #}
    
    ?>
</html>