<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 25</h2>
        <h3>Realiza un programa que pida un número por teclado y que luego muestre ese número al revés.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Numero: <input type='number' name='numero' min=0/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
<?php
$Numero=strrev($_REQUEST["numero"]);
print_r($Numero);

?>


<html>