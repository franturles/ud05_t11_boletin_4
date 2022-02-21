<html>
    <head>
    <title>UD05_T11_boletin_4</title>
        <meta charset='UTF-8'>
        <h1>UD05_T11</h1>
        <h2>Ejercicio 6</h2>
        <h3>Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while</h3>
    </head>
    <body>
    <form action="ejercicio_07.php" enctype='multipart/form-data' method='post'>
        <p>Numero: <input type='number' name='numero' min=0/></p>
        <p><input type='submit' value='Submit'/></p>
    </from>
    <?php
        $Numero=$_REQUEST["numero"];
if(strlen($Numero) < 5){

    }else{
    echo "Tiene que ser de 5 cifras";
}
?>
    </body>
</html>