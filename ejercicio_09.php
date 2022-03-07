<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 9</h2>
        <h3>Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero' min=0/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
</html>
<?php
$Numero=$_REQUEST["numero"];
$Contar=strlen($Numero);
echo "Tiene $Contar digitos";

?>