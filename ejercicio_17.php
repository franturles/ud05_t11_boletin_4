<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 17</h2>
        <h3>Realiza un programa que sume los 100 números siguientes a un número entero y positivo
introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un número
positivo).</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero'/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    <?php
    if(isset($_REQUEST["numero"])&& filter_var($_REQUEST["numero"],FILTER_VALIDATE_INT)&& $_REQUEST["numero"]> 0){
        $Numero=$_REQUEST["numero"];
        for ($i=1; $i < 100 ; $i++) { 
            $Nuevo = $Numero + $i;
            $Resu = $Resu + $Nuevo;
        }
        echo "La suma del número $Numero mas sus 100 números siguientes es: $Resu";
    }else{
        echo "Vuelva a introducir el numero";
    }
    
    ?>