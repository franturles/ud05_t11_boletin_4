<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 23</h2>
        <h3>Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la
suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
el contador de los números introducidos y la media.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero' min=0/></p>
        <p><input type='submit' value='Submit'/></p>
        <p><input type='submit' name="reiniciar" value='Reiniciar'/></p>
    </from>
    <?php
    session_start();
    $Acumulado = $_SESSION["acumulado"];

    if (isset($_REQUEST["reiniciar"])) {
        $Acumulado=0;
    }
    
    $Numero=isset($_REQUEST["numero"])?$_REQUEST["numero"]:"";
    if (empty($Acumulado) && !empty($Numero)) {
        $Acumulado = array();
        array_push($Acumulado, $Numero);
        $Contar=count($Acumulado);
    }else {
        array_push($Acumulado,$Numero);
        $Contar=count($Acumulado);
    }
    foreach ($Acumulado as $Contenido) {
        if ($Suma < 10) {
            $Suma=$Suma+$Contenido;
        }else {
            $Contar=$Contar-1;
            $Media=$Suma/$Contar;
            echo "<br>El numero de valores introducidos fueron: $Contar";
            echo "<br>EL total es $Suma";
            echo "<br>La media es $Media";
        }
    }
    #print_r($Suma);
    $_SESSION["acumulado"] = $Acumulado;
    ?>

</html>