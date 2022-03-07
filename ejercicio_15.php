<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 15</h2>
        <h3>Escribe un programa que dados dos números, uno real (base) y un entero positivo (exponente), saque
por pantalla todas las potencias con base el numero dado y exponentes entre uno y el exponente
introducido. No se deben utilizar funciones de exponenciación. Por ejemplo, si introducimos el 2 y
el 5, se deberán mostrar 2¹, 2², 2³, 2⁴, 2⁵.</h3>
    </head>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='post'>
        <p>Base: <input type='number' name='base' min='0'/></p>
        <p>Exponente: <input type='number' name='exponente' min='0'/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
</html>

<?php
$base = $_REQUEST["base"];
$exponente = $_REQUEST["exponente"];

for ($i=1; $i <= $exponente; $i++) { 
    echo "<p>$base<sup>$i</sup></p>";
}
?>