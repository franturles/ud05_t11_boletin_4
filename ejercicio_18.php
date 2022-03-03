<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 18</h2>
        <h3>Escribe un programa que obtenga los números enteros comprendidos entre dos números introduci-
dos por teclado y validados como distintos, el programa debe empezar por el menor de los enteros
introducidos e ir incrementando de 7 en 7.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero1: <input type='number' name='numero1' min=0/></p>
        <p>Numero2: <input type='number' name='numero2' min=0/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
<?php
if ($_REQUEST["numero1"] == $_REQUEST["numero2"]){
    echo "<br>Tienen que ser distintos";
}else{
    $Numero1=isset($_REQUEST["numero1"])?$_REQUEST["numero1"]:"";
    $Numero2=isset($_REQUEST["numero2"])?$_REQUEST["numero2"]:"";
    $Mayor=max($Numero1,$Numero2);
    $Minimo=min($Numero1,$Numero2);
    while ($Minimo <= $Mayor) {
        echo "<br>$Minimo";
        $Minimo=$Minimo+7;
    }
}

?>

</html>